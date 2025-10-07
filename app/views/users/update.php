<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: rgba(42, 0, 80, 0.55);
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
  style="background-image: url('https://i.pinimg.com/originals/f0/6a/0a/f06a0a7f75c0f3f58a4624f6ebb3d8c6.gif');">

  <div id="app" class="relative w-full max-w-2xl bg-white/80 rounded-3xl shadow-2xl p-10 backdrop-blur-lg border border-white/40">
    
    <!-- Header -->
    <h2 class="text-4xl font-extrabold text-pink-700 text-center tracking-wide drop-shadow-md mb-6">
      📝 Update User
    </h2>

    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-5">

      <!-- Username -->
      <div>
        <label class="block text-pink-700 font-semibold mb-1">Username</label>
        <input type="text" name="username" value="<?= html_escape($user['username'])?>" required
               class="w-full px-4 py-3 border border-pink-200 bg-white/90 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none shadow-sm">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-pink-700 font-semibold mb-1">Email Address</label>
        <input type="email" name="email" value="<?= html_escape($user['email'])?>" required
               class="w-full px-4 py-3 border border-pink-200 bg-white/90 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none shadow-sm">
      </div>

      <?php if(!empty($logged_in_user) && $logged_in_user['role'] === 'admin'): ?>
        <!-- Role Dropdown -->
        <div>
          <label class="block text-pink-700 font-semibold mb-1">Role</label>
          <select name="role" required
                  class="w-full px-4 py-3 border border-pink-200 bg-white/90 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none shadow-sm">
            <option value="user" <?= $user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
            <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
          </select>
        </div>

        <!-- Password -->
        <div class="relative">
          <label class="block text-pink-700 font-semibold mb-1">Password</label>
          <input type="password" name="password" id="password"
                 placeholder="Leave blank to keep current password"
                 class="w-full px-4 py-3 border border-pink-200 bg-white/90 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none shadow-sm">
          <i class="fa-solid fa-eye absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer text-pink-600" id="togglePassword"></i>
        </div>
      <?php endif; ?>

      <!-- Submit -->
      <div class="flex justify-between items-center pt-4">
        <a href="<?=site_url('/users');?>" 
          class="inline-block bg-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-xl shadow hover:bg-gray-300 hover:shadow-md transition duration-200">
          ⬅ Return
        </a>
        <button type="submit"
                class="bg-pink-600 hover:bg-pink-700 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition duration-200">
          Update User
        </button>
      </div>
    </form>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-600 mt-6">
      <p>User Management System © <?=date('Y')?> — All rights reserved.</p>
    </footer>
  </div>

  <!-- Password Toggle Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');

      if (togglePassword && password) {
        togglePassword.addEventListener('click', function() {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          this.classList.toggle('fa-eye');
          this.classList.toggle('fa-eye-slash');
        });
      }
    });
  </script>

  <!-- FontAwesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>
</html>
