<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/styles/tribute.css"/>
        <title>Log in | Romain Auger</title>
    </head>
    <body>
    <?php include 'components/header.php' ?>

        <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Username">
            <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
            </span>
        </div>
        </div>

        <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" placeholder="Email@...">
            <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        </div>

        <div class="field">
        <label class="label">Password</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="password" placeholder="Password...">
            <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        </div>

        <div class="field">
        <label class="label">Confirm password</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="password" placeholder="Password...">
            <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        </div>

        <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
        </div>

    <?php include 'components/footer.php' ?>    
    </body>
</html> 