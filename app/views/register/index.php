
    <div class="container">
        <form class="form-horizontal" action="http://bwt-test/register/reg" method="post">
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
        <a class="btn_link" href="http://bwt-test/login"><button>LOGIN</button></a>
    </div> <!-- ./container -->
