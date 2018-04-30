from django.shortcuts import render

# Create your views here.
def block_list(request):
	return render(request, 'packethunterapp/block_list.html',{})
