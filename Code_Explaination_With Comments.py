import nltk
import time
from nltk.tokenize import word_tokenize
from nltk.tag import CRFTagger
from nltk.classify.scikitlearn import SklearnClassifier

start_time = time.time();

# documents = []

# short_pos = open("Reviews_From_PHP_Code/newDoc.txt","r").read()
# for p in short_pos.split('\n'):
# 	documents.append( (p , 'pos') ) # The braces around p,'pos' are because append takes only one argument

# print documents
# print("\n -----%s seconds------" % (time.time() - start_time))
# Replacable code for the above code.

all_words = []	# The list of all adjectives extracted from input sentences.
allowed_word_types = ["J"]
doc1 = []

# Open the reviews file and split the file by new-line character "\n" and store it in a list called 'content'.
with open("Reviews_From_PHP_Code/newDoc.txt","r") as f:
	content = f.readlines()
	content = [s.strip('\n') for s in content]

# For every line in content append 'pos' to every sentence.
for k in content:
	doc1.append( (k , 'pos') )
	words = word_tokenize(k) # Each sentence is broken down into individual words.
	pos = nltk.pos_tag(words) # Each word is tagged with its Part-Of-Speech.

	# Every pair of word-pos is iterated over and the first letter of pos part is checked whether it is the letter 	 "J" or not. If it is is "J" the the word is an adjective i.e "JJ" and is added to all_words. 
	for w in pos:
		if w[1][0] in allowed_word_types: #"in" checks if given variable is part of a variable eg. "at" in cat
			all_words.append(w[0].lower()) # All the adjectives are appended to the all_words list


# Count the total number of words in 'all_words' and call it 'outcomes'.
# Check how many words are repeated and count all words without repetition and call it 'samples'.
all_words = nltk.FreqDist(all_words)
# for x in all_words:
# 	print x
# word_features = list(all_words.keys())[:5]
# print word_features

# Only the review part is passed to this function
def find_features(doc1):
	# print doc1
   	words = word_tokenize(doc1) # All the reviews are tokenized 
	features = {}

	# Each review is checked if it contains any word from 'all_words' list. If the words exists then it is labelled
	# as true else that word is labelled as false.
	for w in all_words:
		features[w] = (w in words)
	return features



# The list doc1 is divided into 'rev' and 'category' i.e review part and pos part and the review part is passed to 
# function find_features.
featuresets = [(find_features(rev), category) for (rev, category) in doc1]
print len(featuresets)


training_set = featuresets[5:]
testing_set = featuresets[:5]

classifier = nltk.NaiveBayesClassifier.train(training_set)
print("Original Naive Bayes Algo accuracy percent:", (nltk.classify.accuracy(classifier, testing_set))*100)
classifier.show_most_informative_features(9);




















# print("\n -----%s seconds------" % (time.time() - start_time))

	# Each sentence in the file is tokenized.
	# words = One sentence in the file for one iteration
	# words = word_tokenize(p) 

	# Each tokenized sentence is a list of seperated words. This list is assigned parts-of-speech and each
	# token is converted into a tuple 
	# pos = nltk.pos_tag(words)
	# print pos



