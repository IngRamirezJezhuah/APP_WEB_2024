from . import views
from django.urls import path


urlpatterns = [
    path('',views.index,name='inicio'),
    path('inicio/',views.index,name='inicio'),
    path('acercade/',views.about,name='acercade'),
    path('mision/',views.mision,name='mision'),
    path('vision/',views.vision,name='vision'),
    
]

