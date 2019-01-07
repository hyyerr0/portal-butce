# portal-butce
portal projesi için butce modülü

# Bilgi #
>Bu projede tüm değişiklikler ve yüklemeler developer branch ı ile backend altında yapılmıştır
>Bu oluşturulan modül , model ve crud işlemleri portal-gii kullanılarak yapılmıştır.

# Kurulum
>Profilimde bulunan portal isimli reponun composer.json dosyasına kouosl'den Fork ettiğim ve değiştirdiğim portal-theme , gii generator ile oluşturduğum portal-butce eklenmiştir.Profilimdeki portal kurulumundan sonra bunlar otamatik gelecektir.
>Portal kurulumu için örnek ; https://github.com/kouosl/portal
>
> ## Migrations <br>
>Migrationsu işlemek için su yetkisiyle sanal makinede aşağıdaki kod çalıştırılmalıdır
```
php yii migrate --migrationPath=@vendor/kouosl/portal-butce/migrations --interactive=0
```
<br> 

# Erişim 
> Modül Sayfası : http://portal.kouosl/admin/butce <br>
> Model Sayfası : http://portal.kouosl/admin/butce/butcee
