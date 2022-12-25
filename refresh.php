<?php include 'inc/header.php'; ?>
<h2>Auto refresh div content</h2>
<div class="content">
    <form action="" method="post">
        <table>
            <tr>
                <td>Content</td>
                <td>:</td>
                <td>
                    <textarea name="body" id="body" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="button" name="autorefresh" id="autorefresh" value="Post Data">
                </td>
            </tr>
        </table>
        <div id="autorefreshtatus"></div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>