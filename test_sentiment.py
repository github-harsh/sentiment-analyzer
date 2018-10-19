import sentiment_mod as s

# short_pos = open("short_reviews/positive.txt","r").read()
# print "ok here"

# review_file = open("Reviews_From_PHP_Code\\reviewFile.txt", "r").read()

# for i in review_file.split('\n'):
# 	print (s.sentiment(i))

# print review_file.read()

# x = ['ketaki' , 'harsh' , 'gaikwad']
# print '{0:10d}'.format(x)
# with open("review.txt", 'r') as fin:
#     print fin.read()
    

# lst = raw_input('Your Name : ')
# print "Your name is %s" % lst

# myList  = ["The food was worst, the service was bad. But the ambience was amazing.", "I am awesome.", "Do no go gentle into that good night.","It is such a powerful world.","never give up. you can win.","I love it.","Decent battery.","Screen size is too big","Not enough memory."]

# for l in myList:
# 	print(s.sentiment(l))

# Writing result of sentiment to a text file
# text_file = open("OutputReview.txt","w");
# text_file.write(s.sentiment("The food was bad, the service was great. The ambience was amazing."));
# text_file.write(s.sentiment("The food was bad, the service was great. The ambience was amazing."));
# text_file.write(s.sentiment("I am awesome."));
# text_file.write(s.sentiment("Do no go gentle into that good night."));


print(s.sentiment("I am very scared."))
print(s.sentiment("It is a bad phone."))
print(s.sentiment("The acting was unpleasent."))
print(s.sentiment("I love the battery on the phone."))
print(s.sentiment("I am happy."))
print(s.sentiment("This is bad."))
x=raw_input()
print(s.sentiment(x))

