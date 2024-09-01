function vista() {
        var passInput = document.getElementById("password");
        var verPasswordIcon = document.getElementById("verPassword");

        if (passInput.type === "password") {
            passInput.type = "text";
            verPasswordIcon.classList.remove("fa-eye");
            verPasswordIcon.classList.add("fa-eye-slash");
        } else {
            passInput.type = "password";
            verPasswordIcon.classList.remove("fa-eye-slash");
            verPasswordIcon.classList.add("fa-eye");
        }
    }