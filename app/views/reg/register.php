 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
}

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=2070&q=80')
                no-repeat center center;
    background-size: cover;
    opacity: 0.15;
    z-index: -1;
}

.glass-effect {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
}

.form-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.5);
}

.header-gradient {
    background: linear-gradient(135deg, #6dd5fa 0%, #2980b9 100%);
}

.btn-primary {
    background: linear-gradient(135deg, #6dd5fa, #2980b9);
    transition: all 0.3s ease;
    color: white;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(41, 128, 185, 0.4);
}

.form-input {
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(41, 128, 185, 0.2);
    transition: all 0.3s ease;
}

.form-input:focus {
    box-shadow: 0 0 0 3px rgba(41, 128, 185, 0.15);
    border-color: #2980b9;
    background: rgba(255, 255, 255, 0.95);
}

.floating-icon {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

.image-container {
    background: linear-gradient(135deg, #6dd5fa 0%, #2980b9 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    min-height: 200px;
}

.login-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #6dd5fa, #2980b9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    box-shadow: 0 8px 25px rgba(41, 128, 185, 0.3);
}

.error {
    color: red;
}
</style>

</head>

<body class="min-h-screen p-4 md:p-6 relative">

    <!-- Floating decorative elements -->
    <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-blue-400 opacity-20 floating-icon"></div>
    <div class="absolute bottom-20 right-10 w-16 h-16 rounded-full bg-red-400 opacity-20 floating-icon" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-yellow-400 opacity-20 floating-icon" style="animation-delay: 2s;"></div>

    <div class="relative w-full max-w-3xl mx-auto rounded-2xl glass-effect p-4">

        <!-- Header -->
        <header class="flex flex-col md:flex-row justify-between items-center gap-4 py-3 mb-6">
            <div class="flex items-center gap-3">
                <div class="p-2 rounded-full bg-white bg-opacity-20">
                    <i class="fas fa-user-plus text-2xl text-white"></i>
              <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
}

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=2070&q=80')
                no-repeat center center;
    background-size: cover;
    opacity: 0.15;
    z-index: -1;
}

.glass-effect {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
}

.form-container {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.5);
}

.header-gradient {
    background: linear-gradient(135deg, #6dd5fa 0%, #2980b9 100%);
}

.btn-primary {
    background: linear-gradient(135deg, #6dd5fa, #2980b9);
    transition: all 0.3s ease;
    color: white;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(41, 128, 185, 0.4);
}

.form-input {
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(41, 128, 185, 0.2);
    transition: all 0.3s ease;
}

.form-input:focus {
    box-shadow: 0 0 0 3px rgba(41, 128, 185, 0.15);
    border-color: #2980b9;
    background: rgba(255, 255, 255, 0.95);
}

.floating-icon {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

.image-container {
    background: linear-gradient(135deg, #6dd5fa 0%, #2980b9 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    min-height: 200px;
}

.login-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #6dd5fa, #2980b9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    box-shadow: 0 8px 25px rgba(41, 128, 185, 0.3);
}

.error {
    color: red;
}
</style>

</head>

<body class="min-h-screen p-4 md:p-6 relative">

    <!-- Floating decorative elements -->
    <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-blue-400 opacity-20 floating-icon"></div>
    <div class="absolute bottom-20 right-10 w-16 h-16 rounded-full bg-red-400 opacity-20 floating-icon" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-yellow-400 opacity-20 floating-icon" style="animation-delay: 2s;"></div>

    <div class="relative w-full max-w-3xl mx-auto rounded-2xl glass-effect p-4">

        <!-- Header -->
        <header class="flex flex-col md:flex-row justify-between items-center gap-4 py-3 mb-6">
            <div class="flex items-center gap-3">
                <div class="p-2 rounded-full bg-white bg-opacity-20">
                    <i class="fas fa-user-plus text-2xl text-white"></i>
                </div>
                <div>
                   
        </header>
        </header>
</head>
<body>
  <section>
    <div class="login">
      <h2>Register</h2>
      <form method="POST" action="<?= site_url('reg/register'); ?>" class="inputBox">

        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>

        <div class="password-box">
          <input type="password" id="password" name="password" placeholder="Password" required>
          <i class="fa-solid fa-eye" id="togglePassword"></i>
        </div>

        <div class="password-box">
          <input type="password" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" required>
          <i class="fa-solid fa-eye" id="toggleConfirmPassword"></i>
        </div>

        <!-- Hidden role input to force user role -->
        <input type="hidden" name="role" value="user">

        <button type="submit" id="btn">Register</button>
      </form>

      <div class="group">
        <p>Already have an account? <a href="<?= site_url('reg/login'); ?>">Login here</a></p>
      </div>
    </div>
  </section>

  <script>
    function toggleVisibility(toggleId, inputId) {
      const toggle = document.getElementById(toggleId);
      const input = document.getElementById(inputId);

      toggle.addEventListener('click', function () {
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    }

    toggleVisibility('togglePassword', 'password');
    toggleVisibility('toggleConfirmPassword', 'confirmPassword');
  </script>
</body>
</html>
