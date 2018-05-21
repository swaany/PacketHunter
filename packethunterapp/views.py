from django.shortcuts import render
from django.http import HttpResponse


from .models import blocklog

# Create your views here.
def block_list(request):
	return render(request, 'packethunterapp/block_list.html',{})
