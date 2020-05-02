<html>
    <head>
        Add Mahasiswa
    </head>
    <body>
        <div>
            <form method="POST">
                {{ csrf_field() }}  
                <label> name </label>
                <input type="text" name="name">
                <label> npm </label>
                <input type="text" name="npm">
                <label> hobby </label>
                <input type="text" name="hobby">
                <button type="submit"> Submit </button>
            </form>
        </div>
    </body>
</html>