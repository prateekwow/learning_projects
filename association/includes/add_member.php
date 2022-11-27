<script>
$(document).ready(function(e){
  $("#add_member").on('submit',(function(e) {
    e.preventDefault();
    var files = $('#imageUpload')[0].files;
    var data = new FormData(this);
    // console.log(data);
    // for (var value of data.values()) {
    //   console.log(value); 
    //   }
   if (!image_validation || !validateForm()){
     //  data = $('#frominputs').serialize();
    //  data = new FormData(document.getElementById('frominputs'));
    //  data.append('image',files[0]);
     // console.log(image_validation);
      // ajax_call(data,'add_member');
        $('#error').html('Please Fill all Fields!');
        setTimeout(() => {
        $('#error').html('');
        }, 2000);
    //  console.log("can't submit");
     // return false;
    } else {
    // var files = $('#imageUpload')[0].files;
     // console.log(image_validation);
    // data = $('#frominputs').serialize();
    //  data = new FormData(document.getElementById('frominputs'));
    //  data = new FormData();
    // data.append('image',files[0]);
    ajax_call(data,'add_member');
    setTimeout(() => {
      window.location.href="member_profile/"+$('#name').val();
    }, 3000);
   }
  }));
});

var readURL=(input)=> {
  if (input.files && input.files[0]) {
    const maxAllowedSize = 2 * 1024 * 1024;
    var reader = new FileReader();
    reader.onload = function(e) {
        const img_name = input.files[0].name;
        const lastDot = img_name.lastIndexOf('.');
        const ext = img_name.substring(lastDot + 1);
        // extension.value = ext;
        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        $('#imagePreview').hide();
        $('#imagePreview').fadeIn(650);
        console.log(maxAllowedSize);
        console.log(ext);
        console.log(input.files[0].size);
        if (input.files[0].size > maxAllowedSize) {
          // Here you can ask your users to load correct file
          e.target.value = '';
          $('#error').html('File Size must be less then 2mb in size');
          setTimeout(() => {
          $('#error').html('');
          }, 2000);
          // console.log(validateForm.valid);
          // validateForm.valid = false;
          // console.log(validateForm.valid);
          image_validation = false;
          // return false;
        }
        else if(ext!='png' && ext!='jpg' && ext!='jpeg') {
          e.target.value = '';
          $('#error').html('File must be in JPEG, JPG or PNG');
          setTimeout(() => {
          $('#error').html('');
          }, 2000);
          image_validation = false;
        }
        else {
          image_validation = true;
        }
        // console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});

var submit_form = ()=>{
  // console.log(image_validation);
  if (!image_validation || !validateForm()){
    // console.log(image_validation);
    ajax_call('add_member');
    console.log("can't submit");
    // return false;
  } else {
    // console.log(image_validation);
    ajax_call('add_member');
  }

}

var currentTab = 0;
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    console.log(y[y.length-1].value);
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    } else {
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += "finish";
  // }
  return valid; // return the valid status
}
</script>