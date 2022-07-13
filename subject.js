  function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="I")
                {
                    var arr=["Select subject","Math","English","Physics","Chemistry","ICT","Graphics"];
                }
                else if(a==="II")
                {
                    var arr=["Select subject","EEC","BEC","CPH","PIC","AMI","BCC","WPD"];
                }
				else if(a==="III")
                {
                    var arr=["Select subject","OOP","DSU","CGR","DMS","DTE"];
                }
				else if(a==="IV")
                {
                    var arr=["Select subject","JPR","SEN","DCC","MIC","GAD"];
                }
				else if(a==="V")
                {
                    var arr=["Select subject","EST","AJP","STE","CSS","ACN","ADN","ITR","CPP"];
                }
				else if(a==="VI")
                {
                    var arr=["Select subject","PWP","WBP","MAD","ETI","MGT","EDE","CPE"];
                }
             
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }