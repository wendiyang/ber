( function( $ ) {
$( ".ham-menu" ).click(function(e){
	e.preventDefault();
	$(this).toggleClass('active')
	$(".main-navigation").toggle();
	console.log('abd');
});
} )( jQuery );

$(document).ready(function() {
 
  $('#form').submit(function(e) {
    e.preventDefault();
    var name = $('#name').val();
    var email = $('#email').val();
    var subject = $('#subject').val();
    var textarea = $('#text-area').val();
    $(".error").remove();
 
    if (name.length < 1) {
      $('#name').after('<span class="error">Name field is required</span>');
    }
    if (email.length < 1) {
      $('#email').after('<span class="error">Email field is required</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<span class="error">Enter a valid email</span>');
      }
    }
    if (subject.length < 1) {
      $('#subject').after('<span class="error">Subject field is required</span>');
    }
    if (textarea.length < 1) {
      $('#text-area').after('<span class="error">Textarea field is required</span>');
    }
  });
 
});
// $(function(){
	
// 	$( "body" ).on( "click", ".wpcf7-submit", function(event) {
// 	  	//event.preventDefault();

// 	// });
//  //    var fnSignupOrLogin = function(e){
        
//     var $target = $(e.target);

//     //email validation
//     function emailValidation(theEmail) {
//       var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
//       return regex.test(theEmail);
//     }
//     function showErrors(element, message){
//         return $(element).after('<span class="txt-error">'+message+'</span>').addClass('has-error');
//     }
//     function hideErrors(element){
//         $('.txt-error').remove();
//         return $(element).removeClass('has-error');
//     }

//     var isValid = true;



//     var $email=$target.parents("form").find("input.js-dp-email");
//     var $name= $target.parents("form").find("input.js-dp-name");

//     var email = $.trim($email.val());
//     var name = $.trim($name.val());
//     if(name){
//             var fullName = name.split(' '),
//             firstName = fullName[0],
//             lastName = fullName[fullName.length - 1];

//             if ($name.val() == 'Please enter your name') name = null;

//     }
//     if(email){
//             if($email.val() == 'Please enter your email') email = null;
//             if(!emailValidation(email)) email = null; isValid = false;

//     }
//     if(!name){
//         showErrors($name, 'Please enter your name');
//         $name.on('focus', function(){hideErrors($name)});
        
//         return;
//     }
//     if(!email){
//         if (!isValid) {
//             showErrors($email, 'Please check your email details are correct');
//         }
//         else {
//             showErrors($email, 'Please enter your email');
//         }
//         $email.on('focus', function(){hideErrors($email)});

//         return;
//     }
// };
