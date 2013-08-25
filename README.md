##FYiiAppTemplate
The application template for YiiFramework with separate frontend and backend parts.

###Overal Structure
Bellow the directory structure:

    /
    backend/
        components/
            BackendController.php
        config/
            main.php
            params.php
            routes.php
        controllers/
            DashboardController.php
            DefaultController.php
        data/
            auth.php
        models/
        runtime/ *
        views/
            default/
                error.php
            layouts/
            dashboard/
        www/
            assets/ *
            index.php
            .htaccess
    common/
        components/
        config/
            aliases.php
            db.php
            main.php
            params.php
            routes.php
        controllers/
            CommonDefaultController.php
        extensiions/
            yii-mail/
        models/
    console/
        commands/
        components/
        config/
            main.php
            routes.php
        migrations/
        models/
        runtime/ *
        yiic.php
    framework/
    frontend/
        components/
            FrontendController.php
        config/
            main.php
            params.php
            routes.php
        controllers/
            DefaultController.php
        data/
            auth.php
        models/
        runtime/ *
        views/
            default/
                error.php
            layouts/
        www/
            assets/ *
            index.php
            .htaccess
    crontab
    yiic
    yiic.bat
    
###Top Level Directories
At the top-most level:    

* ***backend***: the backend application which will be mainly used by site administrators to manage the whole system (avoiding admin modules at frontend application to avoid confusion)
* ***console***: the console application that is compound of the console commands required for the system.
* ***frontend***: the frontend application that is the main interface for end users. On a website development, this would be what the site users would see.
* ***common***: the directory whose content is shared among all the above applications.

###Other Information
Version: 1.3.1
Includes:

* YiiFramework 1.1.14
* Yii-Mail (r9 - by Jan 2011)

---
###UPD

**Version 1.3.1**:
* The YiiFramework has been updated to version 1.1.14