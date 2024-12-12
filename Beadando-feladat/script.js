document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.getElementById("messageTextarea");
    const charCount = document.getElementById("charCount");
    const warningMessage = document.getElementById("warningMessage");
  
    textarea.addEventListener("input", function () {
      const maxLength = 300;
      const currentLength = textarea.value.length;
  
      charCount.textContent = `${maxLength - currentLength} karakter maradt`;
  
      if (currentLength >= maxLength) {
        warningMessage.style.display = "block";
      } else {
        warningMessage.style.display = "none";
      }
      
    });
  });

  
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const submitButton = document.getElementById("submitButton");
    const privacyPolicyCheckbox = document.getElementById("privacyPolicy");
    const errorMessage = document.getElementById("errorMessage");
  

    privacyPolicyCheckbox.addEventListener("change", function () {
      submitButton.disabled = !privacyPolicyCheckbox.checked;
    });
  
    form.addEventListener("submit", function (event) {
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
  

      if (!username || !password) {
        event.preventDefault();
        errorMessage.style.display = "block";
      } else {
        errorMessage.style.display = "none";
      }
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.querySelector("textarea");
    
    if (localStorage.getItem("userMessage")) {
      textarea.value = localStorage.getItem("userMessage");
    }
  
    textarea.addEventListener("input", function () {
      localStorage.setItem("userMessage", textarea.value);
    });
  
    const charCount = document.getElementById("charCount");
    const warningMessage = document.getElementById("warningMessage");
  
    textarea.addEventListener("input", function () {
      const maxLength = 300;
      const currentLength = textarea.value.length;
  
      charCount.textContent = `${maxLength - currentLength} karakter maradt`;
  
      if (currentLength >= maxLength) {
        warningMessage.style.display = "block";
      } else {
        warningMessage.style.display = "none";
      }
    });
  });

  $(document).ready(function () {
    $("#privacyPolicy").change(function () {
      if ($(this).prop("checked")) {
        $("#submitButton").prop("disabled", false);
      } else {
        $("#submitButton").prop("disabled", true);
      }
    });
  
    $('#messageTextarea').on('input', function () {
      let remainingChars = 300 - $(this).val().length;
      $('#charCount').text(remainingChars + ' karakter maradt');
      if (remainingChars <= 0) {
        $('#warningMessage').show();
      } else {
        $('#warningMessage').hide();
      }
    });
  });


  