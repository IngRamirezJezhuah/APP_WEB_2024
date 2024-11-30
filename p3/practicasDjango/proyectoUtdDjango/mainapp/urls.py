from django.urls import path
from . import views
from django.conf import settings

urlpatterns = [
    path('', views.index,name='inicio'),
    path('inicio/', views.index,name='inicio'),
    path('acercade/', views.about,name='acercade'),
    path('mision/', views.mision,name='mision'),
    path('vision/', views.vision,name='vision'),
    path('registro/', views.registro,name='registro'),
    path('iniciosesion/', views.iniciosesion,name='iniciosesion'),
    path('logout/', views.logout_user,name='logout'),

]

#ruta imagenes
if settings.DEBUG:
    from django.conf.urls.static import static
    urlpatterns +=static(settings.MEDIA_URL,document_root=settings.MEDIA_ROOT)