# Group_project
 
librarian:
-create()
 -book info (table):
   -bid (primary key)
   -btitle
   -author
   -publisher
   -year
   -status
 -book status (table):
  -bsid (primary key)
  -availability
  -borrowed
 -transaction (table):
  -tid (primary key)
  -date borrowed
  -due date
  -bid
  -sid
 -request (table):
  -request id (prime key)
  -student id
  -book info id
  -status
  -data request
-read()
-update()
-delete()

student:
-read()