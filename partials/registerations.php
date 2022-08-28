<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting registration</title>
    <!-- Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting</h1>   
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
           <form method="post" action="../actions/register.php"
           enctype="multipart/form-data" >
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" 
                    placeholder="Enter your username"
                    require="required" name="username">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" 
                    placeholder="Enter your mobile no"
                    require="required" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" 
                    placeholder="Enter your passsword"
                    require="required" name="password">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" 
                    placeholder="confirm password"
                    require="required" name="cpassword">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" 
                 name="photo">
                </div>
                <div class="mb-3">
                   <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="vote">Vote</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register
                </button>
                 <p>Alredy have an account?<a href="../" class="text-white">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>
