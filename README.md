# React + Vite

This template provides a minimal setup to get React working in Vite with HMR and some ESLint rules.

Currently, two official plugins are available:

- [@vitejs/plugin-react](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react) uses [Babel](https://babeljs.io/) (or [oxc](https://oxc.rs) when used in [rolldown-vite](https://vite.dev/guide/rolldown)) for Fast Refresh
- [@vitejs/plugin-react-swc](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react-swc) uses [SWC](https://swc.rs/) for Fast Refresh

## React Compiler

The React Compiler is not enabled on this template because of its impact on dev & build performances. To add it, see [this documentation](https://react.dev/learn/react-compiler/installation).

## Expanding the ESLint configuration

If you are developing a production application, we recommend using TypeScript with type-aware lint rules enabled. Check out the [TS template](https://github.com/vitejs/vite/tree/main/packages/create-vite/template-react-ts) for information on how to integrate TypeScript and [`typescript-eslint`](https://typescript-eslint.io) in your project.


Here is the complete `README.md` file. You can put this file in your project folder so your friend can read it and copy the terminal commands easily. The English is simple and easy to understand for beginner.

### `README.md`

markdown
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
