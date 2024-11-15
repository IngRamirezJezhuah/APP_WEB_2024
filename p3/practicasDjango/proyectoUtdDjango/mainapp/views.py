from django.shortcuts import render
#from django.shortcuts import redirect

# Create your views here.
def index(requets):
    return render(requets,'mainapp/index.html',{
        'title':'inicio',
        'content':'.::bienvenido a mi pagina de inicio::.'
    })

def about(requets):
    return render(requets,'mainapp/about.html',{
        'title':'acerca de',
        'content':'somos un equipo de SW multiplataforma con django'
    })

def mision(requets):
    return render(requets,'mainapp/mision.html',{
        'title':'mision',
    })

def vision(requets):
    return render(requets,'mainapp/vision.html',{
        'title':'vision',
    })

#redirigir error 404 primera forma
#def error404(request,exception):
#   return redirect('inicio')

#redirijir 2da forma

def error404_2(requets,exception):
    return render(requets,'mainapp/404.html')