import fileinput


#WELCOME MESSAGE

#ASK USER FOR INPUTS


#Replace required strings with user given equivalents so db will work/login
with fileinput.FileInput(filename, inplace = True, backup = '.bak') as setupfile:
	for line in setupfile:
		line.replace(searchText, replaceText)

#create necessary database and tables using requisite MySQL queries