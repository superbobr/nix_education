<?php include '../components/header.php'; ?>
<?php include '../components/navigation.php'; ?>

<main>
    <h2>Login</h2>
    <form action="process_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</main>

<?php include '../components/footer.php'; ?>