<html>

<head>
    <style>

        table {
            width: 100%;
        }

        .contact {
            text-decoration: none;
        }

        .menu-container {
            width: 30%;
            margin: 0 auto;
            height: 100px;
            background-color: red;
            text-align: center;
            padding-top: 83px;
        }

        #contactId {
            color: white;
        }
    </style>

</head>
<body>
<div class="menu-container">
    <a style="text-decoration: none" href="home.html">Home</a>
    <a class="contact" id="contactId" href="contact.html">Contact</a>
    <a href="gallery.html">Gallery</a>
</div>
<div class="banner-container">
    <img style="width: 100%" src="banner.jpg">
</div>
<div  class="adhoc-container">
    <div style="background-color: burlywood;height: 200px;width: 20%;float: left;margin:5px;" class="left-container">
        <p>Registration</p>
    </div>
    <div style="background-color: aquamarine;height: 200px;width: 30%;float: left" class="middle-container">
        <p>Middle content</p>
    </div>
    <div style="background-color: rebeccapurple;height: 200px;width: 20%;float: left" class="middle-container">
        <p>Right </p>
    </div>
</div>
<div class="paragraph-container menu-container">
    <p>Hello world!We are students of 5BF</p>

    <h1>This is header 1</h1>

    <h2>This is header 2</h2>

    <h3>This is header 3</h3>
    <h4>This is header 4</h4>
    <h5>This is header 5</h5>
    <h6>This is header 6</h6>
</div>
<div class="table-container">

    <table border="1">
        <thead>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        </thead>
        <tbody>
        <tr>
            <td>Column 1</td>
            <td>Column 2</td>
            <td rowspan="2">Column 3</td>
        </tr>
        <tr>
            <td>Column 1</td>
            <td>Column 2</td>
            <!--        <td>Column 3</td>-->
        </tr>
        <tr>
            <td id="" colspan="3">Column 1</td>
            <td>trttrtr</td>
            <td>fdff</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="form-container">
    <form action="save.php" method="post">
        <table>
            <tr>
                <td>Student Name</td>
                <td><input name="studentName" required id="studentName" type="text" placeholder="Enter Student Name">
                </td>
            </tr>
            <tr>
                <td>Student ID</td>
                <td><input name="studentId" type="text" placeholder="Enter Student ID"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input required type="password" name="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
