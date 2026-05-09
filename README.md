### `README.md`

# PhoneHub Website Project

This is simple phone compare website build with Laravel framework. User can look phone, see price compare, read blog news, and admin can add more data and image.

## How to run project in your computer

If you want to run this project, you friend must have **PHP**, **Composer**, and **Node.js** install in computer first.

### Step 1: Open Terminal and Install Package
First time you get this project folder, you must go inside the `phonehub-new` folder. Open terminal and type this command to install all technical files:

```
cd phonehub-new
composer install
npm install
```


### Step 2: Make Environment Config File

Laravel need `.env` file to make database and security work.
If you use Windows, type this in terminal:

```bash
copy .env.example .env

```

If you use Mac or Linux, type this:

```bash
cp .env.example .env

```

After you copy the file, generate the app secret key:

```bash
php artisan key:generate

```

### Step 3: Build Database and Put Sample Data

We use simple SQLite database. You do not need to setup heavy MySQL. Just run this one command to make tables and put sample phone data inside:

```bash
php artisan migrate:fresh --seed

```

*(Note: If terminal ask you to create `database.sqlite` file, type "yes" and press Enter)*

### Step 4: Run the Local Servers

You need to open **TWO** different terminal windows to make the backend and frontend work together.

**In Terminal 1 (Run Laravel PHP Backend):**

```bash
php artisan serve

```

**In Terminal 2 (Run CSS and JavaScript Frontend):**

```bash
npm run dev

```

### Step 5: Look at Website

Open your web browser (like Google Chrome or Edge) and go to this link address:
`http://localhost:8000`

---

### Admin Boss Login Info

If you want to test Admin Dashboard to add new phone, new store, or new image, you can login with this sample account:

* **Click:** "Login User" in top menu
* **Email Address:** admin@test.com
* **Password Secret:** 123456

```

```
