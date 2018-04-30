from django.db import models

# Create your models here.
class blocklog(models.Model):
	number = models.BigIntegerField()
	mac = models.charField(6)
	block_pkt = models.FileField()
	atk_type = models.TextField()
	pkt_time = models.DateTimeField()
