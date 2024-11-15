from django.shortcuts import render

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