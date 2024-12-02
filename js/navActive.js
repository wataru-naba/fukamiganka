//メニューアクティブ

const menuActives = [	
	'home',
	'goaisatsu',
	'shinryou',
	'ishi',
	'shisetsu',
	'yoyaku',
	'qa',
	'sick',
	'sick_hakunaisho',
	'ortho',
	'myopine',
	'recruit'
]

const urlPath = location.pathname;
const nav = document.getElementsByClassName("nav_list")[0];

menuActives.map((i,key) => {
	if(urlPath.match(i) ){
		nav.children[key].classList.add('active');
	}else{}
})



