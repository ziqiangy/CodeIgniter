<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>







<style>

    /* 整体结构 */
.flex-container{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    justify-content:center;
    
}
.page-header{
    width:100%;
}

.header-frame{
    text-align: center;
    margin:0 auto;
    border: 3px solid black;
    background-color:beige;
    /* height:120px; */
    max-width:400px;
    border-top-left-radius:50px;
    border-top-right-radius:50px;

}

.frame{
    /* text-align: csenter; */
    margin:0 auto;
    height:400px;
    max-width:400px;
    background-color: beige;
    border:3px solid black;
}

.footer-frame{
    text-align: center;
    margin:0 auto;
    border:3px solid black;
    background-color: beige;
    /* height:40px; */
    max-width:400px;
    border-bottom-left-radius:50px;
    border-bottom-right-radius:50px;
}

.page-footer{
    width:100%;
}

.box{
    width:100%;
}


.dots{
    width:100%;
    text-align:center;
    margin:10px 0;
}


.logo-img{
    vertical-align: middle;
    display:inline-block;
}
.logo-text{
    vertical-align: middle;
    display:inline-block;
    font-size:2em;
}


/* multi tabs plugin */

.box-nav{
    height:50px;
    display:flex;
}

.box-nav-item{
    margin:auto 0;
    /* font-size:1.2em; */
    padding:3px 10px;
    border-bottom:2px solid black;
}

.active-nav{
    border-left:2px solid black;
    border-right:2px solid black;
    border-top:2px solid black;
    border-bottom:none;
}
.box-footer{
    height:50px;
    border-top:3px solid black;

}
.box-header{
    height:50px;
    border-bottom:3px solid black;

}

.box-content{
    /* border-top:3px solid black; */
    /* border-bottom:3px solid black; */
    height:300px;
}

.box-content-item{
    display:none;
}

.active-content{
    display:block !important;
}





/*banner*/
.banner {
            position:relative;
            border:1px solid black;
            border-radius:3em;
            height:300px;
            background:url(/pictures/yjfw/banners/mobile-1.jpg) no-repeat center;
            background-size:cover;
            margin:0 30px;
        }

        .banner-left-arrow,.banner-right-arrow{
            position:absolute;
            height:30px;
            /* font-size:48px; */
            /* color:#49ADAD; */
            /* color:rgba(73, 173, 173,.8); */
            top:50%;
            margin-top:-15px;
            cursor:pointer;
        }
        .banner-left-arrow{
            left:-30px;
        }
        .banner-right-arrow{
            right:-30px;
        }

        .banner ul{
            padding:0;
            height:20px;
            width: 100px;
            background:rgba(255, 255, 255,.3);
            position: absolute;
            bottom: -50px;
            left: 50%;
            margin-left: -50px;
            border:1px solid lightgray;
            border-radius: 10px;
        }

        .banner li {
            list-style:none;
        }
        .banner ul li{
            width: 14px;
            height:14px;
            background-color: lightgray;
            float:left;
            margin:3px;
            border-radius:50%;
            cursor:pointer;
        }

        .banner .banner-current-dot{
            background-color: black;
        }


/* wordlist plugin */
.wordlist-header{
    height:30px;
    border-bottom:1px solid gray;
    display:flex;
    justify-content:space-around;
}

.wordlist-word-board{
    height:280px;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;

}


.wordlist-footer{
    height:30px;
    border-top:1px solid gray;
    display:flex;
    justify-content:space-around;
    align-items:center;
}

.wordlist-index-item{
    
}

</style>
<body>
    <div class="flex-container">
        <div class="page-header">
            <div class="header-frame">
	    <div class="logo-img"><img  src=<?php echo base_url()."/pictures/yjfw/layout/noun-phoenix-384560.png" ?> title="Phoenix by Anton from NounProject.com"></img></div>
                <div class="logo-text"><span>Welcome To</span></div>
                <div class="logo-text"><span>PeterYuanCI</span></div>
            </div>
            
        </div>
        <div class="dots">
	    <img style="height:30px;" src=<?php echo base_url()."/pictures/yjfw/layout/ellipsis-vertical-solid.svg" ?>>
        </div>
        <div class="box">
            <div class="frame">
                <div class="box-header">
                    <div style="display:flex;align-items:center;justify-content:center;height:50px;">
                        <div style="font-size:2em;font-weight:600;">Tabs</div>
                    </div>
                </div>
                <div id="box-navs" class="box-nav">
                    <div class="box-nav-item active-nav">公司介绍</div>
                
                    <div class="box-nav-item">自强科技</div>
                    
                    <div class="box-nav-item">文化传媒</div>
                    
                    <div class="box-nav-item">礼品店</div>
                </div>
    
                <div id="box-contents" class="box-content">
                    <div class="box-content-item active-content">
                        北京元吉凤舞文化发展有限公司简介：<br>本公司成立于2020年12月，分设xx文化传媒品牌和自强科技部品牌。
                        <br>
                        xx文化传媒致力于完成传统传媒至当今新型互联网传媒过渡的使命，帮助大中小型企业提供技术咨询，产品原型设计，以及艺术设计顾问。
                        <br>
                        自强科技部品牌配合文化传媒，帮助实现高科技现代化建站，软件开发，网络运维等工作。致力于帮助中小型企业完成他们所需IT工作，使他们可以专注于本职领域
    
                    </div>
                    <div class="box-content-item">
                        你好，这里是自强科技，请移步<a target="_self" href="http://yzq.yjfw.art">yzq.yjfw.art</a>查看官网简介
                    </div>
                    <div class="box-content-item">
                        你好，欢迎光临元吉凤舞文化传媒，我们提供丰富的文化传媒选择供您查看
                    </div>
                    <div class="box-content-item">
                        敬请期待

                    </div>
                </div>
                <!-- <div class="box-footer"></div> -->
            
            </div>
            </div>

        <div class="dots">
	    <img style="height:30px;" src=<?php echo base_url()."/pictures/yjfw/layout/ellipsis-vertical-solid.svg" ?>>
        </div>
        <div class="box">
            <div class="frame">
                <div class="box-header">
                    <div style="display:flex;align-items:center;justify-content:center;height:50px;">
                        <div style="font-size:2em;font-weight:600;">Banners</div>
                    </div>
                </div>
                
    
                <div id="box-contents" class="box-content">
                    <div class="banner">
			<img class="banner-left-arrow" src=<?php echo base_url()."/pictures/yjfw/banners/circle-arrow-left-solid.svg" ?>>
			<img class="banner-right-arrow" src=<?php echo base_url()."/pictures/yjfw/banners/circle-arrow-right-solid.svg" ?>>
                        <ul>
                            <li class="banner-current-dot"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="box-footer"></div> -->
            
            </div>
            </div>

        <div class="dots">
            <img style="height:30px;" src="/pictures/yjfw/layout/ellipsis-vertical-solid.svg">
        </div>



        <div class="box">
            <div class="frame">
                <div class="box-header">
                    <div style="display:flex;align-items:center;justify-content:center;height:50px;">
                        <div style="font-size:2em;font-weight:600;">Flashcards</div>
                    </div>
                </div>
                
    
                <div id="box-contents" class="box-content">
                    <div id="wordlist-display">
                        <div class="wordlist-header">
                            <img id="prev-word" style="height:30px;" src="/pictures/yjfw/words/arrow-circle-left-solid.svg" alt="">
                            <img id="show-hide-trans" style="height:30px;" src="/pictures/yjfw/words/eye-regular.svg" alt="">
                            <img id="next-word" style="height:30px;" src="/pictures/yjfw/words/arrow-circle-right-solid.svg" alt="">
                            
                        </div>

                        <div class="wordlist-word-board">
                            <div id="display-word-title" style="font-size:30px;font-weight:600;"></div>
                            <div id="display-word-trans" style="font-size:18px;padding:20px;font-weight:600;"></div>
                            <div id="display-word-sentence" style="font-size:16px;padding:0 20px;"></div>
                            
                        </div>
                    </div>

                    <div id="wordlist-addnew" style="display:none;height:310px;">
                        <form action="" id="new-word-form">
                            <label for="new-title">Word Title</label><br>
                            <input type="text" id="new-title" name="title"><br>
                            <label for="new-class">Part of Speech</label><br>
                            <select type="radio" id="new-class" name="class">
                                <option value="n">noun</option>
                                <option value="v">verb</option>
                                <option value="adj">adjective</option>
                                <option value="adv">adverb</option>
                                <!-- <option value=""></option> -->
                            </select><br>
                            <label for="new-translate">Translate</label><br>
                            <textarea name="translate" id="new-translate" cols="30" rows="3"></textarea><br>
                            <label for="new-sentence">Sentence</label><br>
                            <textarea name="sentence" id="new-sentence" cols="30" rows="5"></textarea><br>
                            <input type="submit" id="new-word-submit" value="submit">
                        </form>
                    </div>
                    <div id="wordlist-update" style="display:none;height:310px;">
                        <form action="" id="update-word-form">
                            <label for="update-title">Word Title</label><br>
                            <input type="text" id="update-title" name="title"><br>
                            <label for="update-class">Part of Speech</label><br>
                            <select type="radio" id="update-class" name="class">
                                <option value="n">noun</option>
                                <option value="v">verb</option>
                                <option value="adj">adjective</option>
                                <option value="adv">adverb</option>
                                <!-- <option value=""></option> -->
                            </select><br>
                            <label for="update-translate">Translate</label><br>
                            <textarea name="translate" id="update-translate" cols="30" rows="3"></textarea><br>
                            <label for="update-sentence">Sentence</label><br>
                            <textarea name="sentence" id="update-sentence" cols="30" rows="5"></textarea><br>
                            <input type="submit" id="update-word-submit" value="update">
                        </form>
                    </div>
                    <div id="wordlist-list" style="display:none;height:310px;">
                        
                    </div>
                    <div class="wordlist-footer">
                        <img id="add-word" style="height:30px;" src="/pictures/yjfw/words/plus-circle-solid.svg" alt="">
                        <img id="remove-word" style="height:30px;" src="/pictures/yjfw/words/minus-circle-solid.svg" alt="">
                        <img id="edit-word" style="height:30px;" src="/pictures/yjfw/words/edit-solid.svg" alt="">
                        <img id="list-wordlist" style="height:30px;" src="/pictures/yjfw/words/list-alt-regular.svg" alt="">
                        <div id="display-wordlist-index" style="height:30px; font-size:25px;" class="wordlist-index-item">1</div>
                    </div>
                </div>            
            </div>
        </div>

        <div class="dots">
            <img style="height:30px;" src="/pictures/yjfw/layout/ellipsis-vertical-solid.svg">
        </div>


        <div class="page-footer">
            <div class="footer-frame">
                <div>PeterYuanCI@2023.9.1</div>
            </div>
        </div>

        
    </div>



    
    
    


    <script>
        //tab设计
        let navObjs = document.getElementById("box-navs");
        let contentObjs = document.getElementById("box-contents");


        Array.from(navObjs.children).forEach((navObj,i,a)=>{
            navObj.onclick = function () {
                Array.from(navObjs.children).forEach((val,ind,arr)=>{
                    val.removeAttribute("class");
                    val.setAttribute("class","box-nav-item");
                });
                navObj.removeAttribute("class");
                navObj.setAttribute("class","box-nav-item active-nav");

                Array.from(contentObjs.children).forEach((itemC,iC,aC)=>{
                    itemC.removeAttribute("class");
                    itemC.setAttribute("class","box-content-item");
                });

                contentObjs.children[i].removeAttribute("class");
                contentObjs.children[i].setAttribute("class","box-content-item active-content");
                // console.log(v);
            }
        })
    </script>

    <script>
        //banner设计
        let urls = ['mobile-1','mobile-2','mobile-3','mobile-4','mobile-5'];
        let captions = ['design','coding','analysis','database','finish'];
        let current = 0;

        let nxtBtnObj = document.getElementsByClassName("banner-right-arrow")[0];
        let prevBtnObj = document.getElementsByClassName("banner-left-arrow")[0];

        let liObjs = document.querySelectorAll(".banner ul li");


        nxtBtnObj.onclick = ()=>{
            current = (Number(current)+1)%5;
            document.getElementsByClassName("banner")[0].style.backgroundImage="url(/pictures/yjfw/banners/"+urls[current]+".jpg)";
            Array.from(liObjs).forEach(v=>v.removeAttribute("class"));
            liObjs[current].setAttribute("class","banner-current-dot");
        }
        prevBtnObj.onclick = ()=>{
            current = (Number(current)+4)%5;
            document.getElementsByClassName("banner")[0].style.backgroundImage="url(/pictures/yjfw/banners/"+urls[current]+".jpg)";
            Array.from(liObjs).forEach(v=>v.removeAttribute("class"));
            liObjs[current].setAttribute("class","banner-current-dot");
        }

        Array.from(liObjs).forEach((v,i,a)=>{
            v.onclick=()=>{
                current = i;
                document.getElementsByClassName("banner")[0].style.backgroundImage="url(/pictures/yjfw/banners/"+urls[current]+".jpg)";
                Array.from(liObjs).forEach(v=>v.removeAttribute("class"));
                liObjs[current].setAttribute("class","banner-current-dot");
            }
        })
    </script>

    <script>
        //wordlist

    let wordListObj = {
        vocab:[
            {
                // id:1,
                title:'equivocal',
                class:'adj',
                translate:'not easily understood or explained',
                sentence:'Politicians have been known to provide equivocal answers to reporters’ questions.'
            },
            {
                // id:2,
                title:'enigma',
                class:'n',
                translate:'a person or thing that is mysterious, puzzling, or difficult to understand',
                sentence:'Scientists continue to research cancer to solve the enigma of its primary cause, which will hopefully lead to a cure.'
            },
            {
                // id:3,
                title:'lethargic',
                class:'adj',
                translate:'lacking energy',
                sentence:'It’s not uncommon to feel lethargic for weeks or even months after major surgery.'
            }
        ]
    }

    
    let prevBtn = document.getElementById("prev-word");
    let nextBtn = document.getElementById('next-word');
    let showHideWord = document.getElementById('show-hide-trans');
    let displayWordTitle = document.getElementById('display-word-title');
    let displayWordTrans = document.getElementById('display-word-trans');
    let displayWordSentence = document.getElementById('display-word-sentence');
    let displayWordlistIndex = document.getElementById('display-wordlist-index');

    //initial value display

    let wordPointer = 0;

    displayWordTitle.innerHTML = wordListObj.vocab[wordPointer].title;
    displayWordTrans.innerHTML = wordListObj.vocab[wordPointer].translate;
    displayWordSentence.innerHTML = wordListObj.vocab[wordPointer].sentence;
    displayWordlistIndex.innerHTML = wordPointer+1;

    
    nextBtn.onclick = ()=>{
        wordPointer>=wordListObj.vocab.length-1 ? wordPointer = wordPointer%(wordListObj.vocab.length-1):wordPointer++;
        // console.log(wordPointer);
        displayWordTitle.innerHTML = wordListObj.vocab[wordPointer].title;
        displayWordTrans.innerHTML = wordListObj.vocab[wordPointer].translate;
        displayWordSentence.innerHTML = wordListObj.vocab[wordPointer].sentence;
        displayWordlistIndex.innerHTML = wordPointer+1;
    }
    prevBtn.onclick = ()=>{
        wordPointer<=0 ? wordPointer=wordPointer+wordListObj.vocab.length-1 : wordPointer--;
        // console.log(wordPointer);
        displayWordTitle.innerHTML = wordListObj.vocab[wordPointer].title;
        displayWordTrans.innerHTML = wordListObj.vocab[wordPointer].translate;
        displayWordSentence.innerHTML = wordListObj.vocab[wordPointer].sentence;
        displayWordlistIndex.innerHTML = wordPointer+1;
    }

    const hostName = 'http://127.0.0.1:5501';
    // const hostName = 'https://dev.yjfw.art';
    showHideWord.onclick = () => {        
        if(showHideWord.src==`${hostName}/imgs/words/eye-regular.svg`){
            showHideWord.src = `${hostName}/imgs/words/eye-slash-regular.svg`;
            displayWordTrans.style.display='none';
        }else{
            showHideWord.src=`${hostName}/imgs/words/eye-regular.svg`;
            displayWordTrans.style.display='block';
        }
        // showHideWord.src == `${hostName}/imgs/words/eye-regular.svg` ? showHideWord.src = `${hostName}/imgs/words/eye-slash-regular.svg`: showHideWord.src=`${hostName}/imgs/words/eye-regular.svg`;
    }

    //add and remove words

    let addWord = document.getElementById('add-word');
    let removeWord = document.getElementById('remove-word');
    let listWord = document.getElementById('display-word-list');

    addWord.onclick = () => {

        document.getElementById('wordlist-display').style.display="none";
        document.getElementById('wordlist-addnew').style.display="block";

        // console.log(wordListObj.vocab);
    }

    removeWord.onclick = () => {
        wordListObj.vocab.splice(wordPointer,1);
        prevBtn.onclick();
        console.log(wordListObj.vocab);
    }


    //insert new word
    let btn = document.querySelector("#new-word-submit");
    let form = document.querySelector("#new-word-form");
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        const values = [...formData.entries()];
        let word = values.reduce((prev,curr)=>(prev.push({[curr[0]]:curr[1]}),prev),[]);
        word = word.reduce((prev,curr)=>{return {...prev,...curr}});
        wordListObj.vocab.splice(wordPointer+1,0,word);
        nextBtn.onclick();
        // console.log(wordListObj.vocab);

        document.getElementById('wordlist-display').style.display="block";
        document.getElementById('wordlist-addnew').style.display="none";
    })


    //update word 
    document.getElementById('edit-word').onclick = () => {
        document.getElementById('wordlist-display').style.display="none";
        document.getElementById('wordlist-update').style.display="block";
        let toUpdateWord = wordListObj.vocab[wordPointer];
        document.getElementById('update-title').value = toUpdateWord['title'];
        document.getElementById('update-translate').innerText = toUpdateWord['translate'];
        document.getElementById('update-sentence').innerText = toUpdateWord['sentence'];

        let wordClassOptions = document.getElementById('update-class').children;
        Array.from(wordClassOptions).forEach((v,i,a)=>{
            if(v.value==toUpdateWord['class']){
                v.selected='selected';
            }
        })
    }

    document.querySelector("#update-word-submit").addEventListener('click',(e)=>{
        e.preventDefault();
        const formData = new FormData(document.querySelector("#update-word-form"));
        const values = [...formData.entries()];
        // console.log(values);
        let word = values.reduce((prev,curr)=>(prev.push({[curr[0]]:curr[1]}),prev),[]);
        word = word.reduce((prev,curr)=>{return {...prev,...curr}});
        wordListObj.vocab.splice(wordPointer,1,word);
        document.getElementById('wordlist-display').style.display="block";
        document.getElementById('wordlist-update').style.display="none";

        //重新display时候要再次刷新所有值
        displayWordTitle.innerHTML = wordListObj.vocab[wordPointer].title;
        displayWordTrans.innerHTML = wordListObj.vocab[wordPointer].translate;
        displayWordSentence.innerHTML = wordListObj.vocab[wordPointer].sentence;
        displayWordlistIndex.innerHTML = wordPointer+1;

    })

    //list wordlist

    </script>

</body>
</html>
