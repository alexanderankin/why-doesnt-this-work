a="localhost:8080/app.php/api/" # address

# get all
curl "$a""report"
echo ""
# get one
curl "$a""report/1"
echo ""
# post new
curl "$a""report" -X POST--data '{"tknum":5,"body":"message"}'
echo ""
# put old
curl "$a""report/2" -X PUT --data '{"body":"message"}'
echo ""

### sqlite> .schema reports
### CREATE TABLE reports (tknum integer primary key not null, body text not null);