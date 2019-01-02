<div class="container">
    <form class="form-horizontal" action="http://bwt-test/comment/add" method="post">
        <h2 style="text-align: center">Comment</h2>
        <div class="form-group">
            <label for="userName" class="col-sm-3 control-label">Имя</label>
            <div class="col-sm-9">
                <input type="text" name="userName" id="userName" placeholder="Имя" class="form-control" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="6LfWLIYUAAAAABe9zh8IRLZBS-0QHYMqM5WW2wKZ"></div>

        <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Добавить</button>

    </form> <!-- /form -->
</div> <!-- ./container -->
