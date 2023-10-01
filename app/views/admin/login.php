<div class="row">
    <div class="col-12">
        <form action="/admin/login" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control"  name="username" id="username" aria-describedby="usernameHelp">
                <div id="usernameHelp" class="form-text">Please enter your login username</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>