$(document).ready(function() {
  $('#submit').click(function() {
    var name = $('#name').val();
    var email = $('#email').val();
    var subject = $('#message').val();
    var message = $('#contact').val();

    $('#returnmessage').empty(); //To empty previous error/success message.
    //checking for blank fields
    if (name == '' || email == '' || subject == '') {
      alert('Please Fill Required Fields');
    } else {
      // Returns successful data submission message when the entered information is stored in database.
      $.post(
        'save_message.php',
        { name1: name, email1: email, subject1: subject, message1: message },
        function(data) {
          $('#returnmessage').append(data); //Append returned message to message paragraph
          if (
            data == 'Your Query has been received, We will contact you soon.'
          ) {
            $('#form')[0].reset(); //To reset form fields on success
          }
        }
      );
    }
  });
});

$(document).ready(function() {
  setTimeout(function() {
    $('.auto-close').hide(2000);
  }, 2000);
});
$('form').submit(function(e) {
  var ref = $(this).find('[required]');

  $(ref).each(function() {
    if ($(this).val() == '') {
      alert('Required field should not be blank.');

      $(this).focus();

      e.preventDefault();
      return false;
    }
  });
  return true;
});

function validate(e) {
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;

  var emailFilter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
  var phoneFilter = /^http:\/\//;

  if (!emailFilter.test(email)) {
    alert('Please enter a valid e-mail address.');
    return false;
  }

  if (!phoneFilter.test(phone)) {
    alert('Please correct your phone number.');
    return false;
  }

  alert('all good');
  return true;
}

document.getElementById('frm').onsubmit = validate;
