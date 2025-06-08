<!-- README.md (HTML-like formatting) -->
<h1 align="center">🚀 Laravel Clean Structure with Snea</h1>

<p align="center">
  Template Laravel dengan struktur bersih, modular, dan terintegrasi dengan <strong>Sneat Admin Dashboard</strong>.
</p>

<p align="center">
  <a href="https://laravel.com/">Laravel</a> •
  <a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">Sneat Template</a> •
  <a href="#installation">Installation</a> •
  <a href="#structure">Structure</a> •
  <a href="#usage">Usage</a>
</p>

<hr />

<h2>📋 Summary</h2>
<p>
Template Laravel dengan struktur clean architecture: dipisahkan ke dalam <code>Controllers</code>, <code>Middlewares</code>, <code>Services</code>, dan <code>Providers</code>.
Resource minimalis, fleksibel, dan cocok untuk pengembangan admin dashboard yang terorganisir dengan starter pack <strong>Sneat</strong> yang sudah diringkas.
</p>

<h2>⚙️ Requirements</h2>
<ul>
  <li>PHP >= 8.x</li>
  <li>Composer</li>
  <li>Node.js & NPM</li>
  <li><a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">Sneat HTML Template</a></li>
</ul>

<h2>🗂️ Structure</h2>

<h3><code>app/</code></h3>
<pre>
app/
├── Console/
├── Exceptions/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
├── Models/
├── Providers/
├── Services/
</pre>

<h3><code>resources/</code></h3>
<pre>
resources/
├── views/
│   ├── layouts/
│   ├── components/
│   └── pages/
├── js/
│   └── app.js
├── sass/
</pre>

<h2 id="installation">🛠️ Installation</h2>
<ol>
  <li>Clone repository dan buka terminal di root folder</li>
  <li>Install dependency Laravel:</li>
  <pre><code>composer install</code></pre>
  <li>Copy file <code>.env</code>:</li>
  <pre><code>cp .env.example .env</code></pre>
  <li>Generate app key:</li>
  <pre><code>php artisan key:generate</code></pre>
  <li>Install dependencies JS dan build project:</li>
  <pre><code>npm install && npm run build</code></pre>
  <li>Pastikan script berikut ada di file <code>composer.json</code>:</li>
  <pre><code>
"scripts": {
  "dev": [
    "Composer\\Config::disableProcessTimeout",
    "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"npm run dev\" --names=server,queue,logs,vite"
  ]
}
  </code></pre>
  <li>Jalankan server dengan:</li>
  <pre><code>composer run dev</code></pre>
</ol>


<h2>📎 Resources</h2>
<ul>
  <li><a href="https://laravel.com/docs">Laravel Official Documentation</a></li>
  <li><a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/">Sneat Template Docs</a></li>
</ul>

<h2>🧑‍💻 Contributing</h2>
<p>Silakan fork repository ini jika ingin mengembangkan lebih lanjut. Pull request sangat disambut!</p>

<h2>📄 License</h2>
<p>
Proyek ini disediakan untuk tujuan pembelajaran dan pengembangan internal. Untuk penggunaan komersial Sneat Template, pastikan Anda memiliki lisensi resmi dari <a href="https://themeselection.com">ThemeSelection</a>.
</p>
