from django.shortcuts import render
from django.contrib import messages
from . import views
# Create your views here.
def index(requets):
    return render(requets,'mainapp/index.html',{
        'title':'inicio',
        'content':'bienvenido a mi pagina de Inicio ( •̀ ω •́ )✧'
    })

def about(requets):
    return render(requets,'mainapp/about.html',{
        'title':'acerca de',
        'content':'Estamos desarrollando un projecto django en clase'
    })

def mision(requets):
    return render(requets,'mainapp/mision.html',{
        'title':'mision',
    })

def vision(requets):
    return render(requets,'mainapp/vision.html',{
        'title':'vision',
    })

def error404(requets,exception):
    return render(requets, 'mainapp/404.html')

def login_us(requets):
    return render(requets,'mainapp/login.html',{
            'title':'Inico de sesion',
            'content':'.::Formulario de Inicio de sesion::.'
        })

def registro(requets):
    return render(requets, 'mainapp/registro.html', {
            'title':'Registros de usuario',
            'content':' registro de sesion::.'
        })