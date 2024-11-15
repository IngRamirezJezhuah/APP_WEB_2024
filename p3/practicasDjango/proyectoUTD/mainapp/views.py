from django.shortcuts import render

# Create your views here.
#estas son las vistas generales
def index(requets):
    return render(requets,'mainapp/index.html',{
        'title':'inicio',
        'content':'.::bienvenido a mi pagina principal ::.'
    })

def about(requets):
    return render(requets, 'mainapp/about.html',{#se abre con llaves
        'title':'Acerca de',
        'content':'.::somos un equipo de desarrollo de SW con Django'
    })
#respetar la comas con las que se va a trabajar

#ytabajamos con bloques


def mision(requets):
    return render(requets, 'mainapp/about.html',{#se abre con llaves
        'title':'Mision',
        'content':'.::mision de la utd::.'
    })

def vision(requets):
    return render(requets, 'mainapp/about.html',{#se abre con llaves
        'title':'Acerca de',
        'content':'.::somos un equipo de desarrollo de SW con Django'
    })