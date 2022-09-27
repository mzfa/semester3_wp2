<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->load->view('_partial/head') ?>
</head>
<body>
    <?= $this->load->view('_partial/navbar') ?>
    <h1>Contact Us</h1>
    <form action="" method="post">
        <div class="">
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Nama anda" required>
        </div>
        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email anda" required>
        </div>
        <div class="">
            <label for="messages">Messages</label>
            <textarea name="message" id="message" cols="30" rows="5" required placeholder="Write your message"></textarea>
        </div>
        <div class="">
            <input type="submit" value="Kirim">
            <input type="reset" value="Reset">
        </div>
    </form>
    <?= $this->load->view('_partial/footer') ?>
</body>
</html>