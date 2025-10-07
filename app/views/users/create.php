<?php
// Ensure $logged_in_user is defined to avoid undefined variable error
if (!isset($logged_in_user)) {
    $logged_in_user = ['role' => 'user']; // default to normal user if not set
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: rgba(42, 139, 42, 0.55);
      z-index: 0;
    }
    #app {
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body
  class="min-h-screen flex items-center justify-center p-6 bg-cover bg-center relative font-sans text-gray-800"
  style="background-image: url('https://i.pinimg.com/originals/1f/bc/87/1fbc87e7d73c792eb7e4d5e27d1814e1.gif');">

  <div id="app" class="relative w-full max-w-2xl bg-white/80 rounded-3xl shadow-2xl p-10 backdrop-blur-lg border border-white/40">

    <h1 class="text-4xl font-extrabold text-green-800 text-center tracking-wide drop-shadow-md mb-6">
      Create User
    </h1>

    <form id="user-form" action="<?=site_url('users/create/')?>" method="POST" class="space-y-5">
      
      <!-- Username -->
      <div>
        <label class="block text-sm font-semibold text-green-700 mb-1">Username</label>
        <input type="text" name="username" placeholder="Enter username" required
               value="<?= isset($username) ? html_escape($username) : '' ?>"
               class="w-full px-4 py-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 shadow-sm bg-white/90">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-semibold text-green-700 mb-1">Email</label>
        <input type="email" name="email" placeholder="Enter email" required
               value="<?= isset($email) ? html_escape($email) : '' ?>"
               class="w-full px-4 py-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 shadow-sm bg-white/90">
      </div>

      <!-- Password with toggle -->
      <div>
        <label class="block text-sm font-semibold text-green-700 mb-1">Password</label>
        <div class="relative">
          <input type="password" name="password" id="password" placeholder="Enter password" required
                 class="w-full px-4 py-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 shadow-sm bg-white/90">
          <i class="fa-solid fa-eye absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer text-green-700" id="togglePassword"></i>
        </div>
      </div>

      <!-- Role -->
      <?php if($logged_in_user['role'] === 'admin'): ?>
        <div>
          <label class="block text-sm font-semibold text-green-700 mb-1">Role</label>
          <select name="role" required
                  class="w-full px-4 py-3 border border-indigo-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 shadow-sm bg-white/90">
            <option value="" disabled selected>Select Role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
      <?php else: ?>
        <input type="hidden" name="role" value="user">
      <?php endif; ?>

      <!-- Buttons -->
      <div class="flex justify-between items-center pt-4">
        <a href="<?=site_url('/users'); ?>"
          class="inline-block bg-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-xl shadow hover:bg-gray-300 hover:shadow-md transition duration-200">
          Back
        </a>
        <button type="submit"
                class="bg-green-700 text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:bg-green-800 hover:shadow-xl transition duration-200">
          Create
        </button>
      </div>
    </form>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');
      if (togglePassword && password) {
        togglePassword.addEventListener('click', function () {
          const type = password.type === 'password' ? 'text' : 'password';
          password.type = type;
          this.classList.toggle('fa-eye');
          this.classList.toggle('fa-eye-slash');
        });
      }
    });
  </script>
</body>
</html>
