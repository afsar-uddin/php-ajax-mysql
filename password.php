<?php include 'inc/header.php'; ?>
<h2>Topic: Password show button</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text"placeholder="Enter username" />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="password" name="password" id="password" placeholder="Enter password" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td>
                    <button type="button" id="showpassword">Show password</button>
                </td>
            </tr>
        </table>
        <div id="passwordstatus"></div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>