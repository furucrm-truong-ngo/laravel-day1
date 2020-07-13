<html>

<head>
    <title>Form Example</title>
</head>

<body>
    <form method="post">
        @csrf

        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" /></td>
            </tr>
            <tr>
                <td colspan="2" textalign="center">
                    <input type="submit" value="Register" />
                </td>
            </tr>
        </table>

    </form>
</body>

</html>