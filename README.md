# IT114-class

<h2>不同身分登入者內容修改</h2>

<h3>Models/User</h3>
<p>更新$fillable的內容</p>
<ul>
   <li><h4>Http/Kernal  </h4>
   <p>$routeMiddleware指向三個新設定的Class</p>
</li>

  <li><h4>Http/Controllers/HomeController  </h4>
   <p>增加functions handleAdmin/handleTenant/handleLandlord</p>
</li>

  <li><h4>Http/Controllers/HomeController  </h4>
   <p>增加functions handleAdmin/handleTenant/handleLandlord</p>
</li>

  <li><h4>Http/Controllers/Auth/LoginController  </h4>
   <p>$this->validate 修改為 'card_id'</p>
   <p>if(auth()....) 增加不同type的登入認證</p>
</li>

  <li><h4>Http/Controllers/Auth/RegisterController  </h4>
   <p>增加申請表單的內容 card_id 和 type</p>
</li>

  <li><h4>Http/Middleware  </h4>
   <p>增加三個檔案，認證Class Admin/Landlord/Tenant</p>
</li>


