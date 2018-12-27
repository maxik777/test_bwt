<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form class="form-horizontal" action="" method="post">
            <h2 style="text-align: center">Форма Регистрации</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Имя</label>
                <div class="col-sm-9">
                    <input type="text" name="firstName" id="firstName" placeholder="Имя" class="form-control" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="secondName" class="col-sm-3 control-label">Фамилия</label>
                <div class="col-sm-9">
                    <input type="text" name="secondName" id="secondName" placeholder="Фамилия" class="form-control" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">День Рождения</label>
                <div class="col-sm-9">
                    <input type="date" name="birthDate" id="birthDate"  class="form-control">
                </div>
            </div>
                <label  class="control-label col-sm-3">Пол</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="Gener" class="radio-inline">
                                <input type="radio" name="Gener" id="femaleRadio" value="Male">Мужской
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label for="Gener" class="radio-inline">
                                <input type="radio" name="Gener"  id="maleRadio"  value="Female">Женский
                            </label>
                        </div>
                    </div>
                </div>
            <div class="form-group">

            </div>
                <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Регистрация</button>

        </form> <!-- /form -->
    </div> <!-- ./container -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
