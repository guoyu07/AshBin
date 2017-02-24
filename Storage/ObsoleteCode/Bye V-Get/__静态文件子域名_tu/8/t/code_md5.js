function B2H(b,x){var t=x?"0123456789ABCDEF":"0123456789abcdef",s="",i=0;for(i;i<L(b)*4;i++)s+=t.charAt((b[i>>2]>>((i%4)*8+4))&0xF)+t.charAt((b[i>>2]>>((i%4)*8))&0xF);return s}function str2binl(s){var a=[],i=0;for(i;i<L(s)*8;i+=8)a[i>>5]|=(s.charCodeAt(i/8)&((1<<8)-1))<<(i%32);return a}function hex_md5(s,x){return B2H(MD5(str2binl(s),L(s)*8),x);}function MD5(x,l){var a=1732584193,b=-271733879,c=-1732584194,d=271733878,i=0,n,w,v;function f(x,y){w=(x&0xFFFF)+(y&0xFFFF);v=(x>>16)+(y>>16)+(w>>16);return (v<<16)|(w&0xFFFF)}function k(q,a,b,x,s,t){n=f(f(a,q),f(x,t));return f((n<<s)|(n>>>(32-s)),b)}function e(a,b,c,d,x,s,t){return k((b&c)|((~b)&d),a,b,x,s,t)}function g(a,b,c,d,x,s,t){return k((b&d)|(c&(~d)),a,b,x,s,t)}function h(a,b,c,d,x,s,t){return k(b^c^d,a,b,x,s,t)}function j(a,b,c,d,x,s,t){return k(c^(b|(~d)),a,b,x,s,t)}x[l>>5]|=0x80<<((l)%32);x[(((l+64)>>>9)<<4)+14]=l;for(i;i<L(x);i+=16){var o=a,p=b,q=c,r=d;a=e(a,b,c,d,x[i+0],7,-680876936);d=e(d,a,b,c,x[i+1],12,-389564586);c=e(c,d,a,b,x[i+2],17,606105819);b=e(b,c,d,a,x[i+3],22,-1044525330);a=e(a,b,c,d,x[i+4],7,-176418897);d=e(d,a,b,c,x[i+5],12,1200080426);c=e(c,d,a,b,x[i+6],17,-1473231341);b=e(b,c,d,a,x[i+7],22,-45705983);a=e(a,b,c,d,x[i+8],7,1770035416);d=e(d,a,b,c,x[i+9],12,-1958414417);c=e(c,d,a,b,x[i+10],17,-42063);b=e(b,c,d,a,x[i+11],22,-1990404162);a=e(a,b,c,d,x[i+12],7,1804603682);d=e(d,a,b,c,x[i+13],12,-40341101);c=e(c,d,a,b,x[i+14],17,-1502002290);b=e(b,c,d,a,x[i+15],22,1236535329);a=g(a,b,c,d,x[i+1],5,-165796510);d=g(d,a,b,c,x[i+6],9,-1069501632);c=g(c,d,a,b,x[i+11],14,643717713);b=g(b,c,d,a,x[i+0],20,-373897302);a=g(a,b,c,d,x[i+5],5,-701558691);d=g(d,a,b,c,x[i+10],9,38016083);c=g(c,d,a,b,x[i+15],14,-660478335);b=g(b,c,d,a,x[i+4],20,-405537848);a=g(a,b,c,d,x[i+9],5,568446438);d=g(d,a,b,c,x[i+14],9,-1019803690);c=g(c,d,a,b,x[i+3],14,-187363961);b=g(b,c,d,a,x[i+8],20,1163531501);a=g(a,b,c,d,x[i+13],5,-1444681467);d=g(d,a,b,c,x[i+2],9,-51403784);c=g(c,d,a,b,x[i+7],14,1735328473);b=g(b,c,d,a,x[i+12],20,-1926607734);a=h(a,b,c,d,x[i+5],4,-378558);d=h(d,a,b,c,x[i+8],11,-2022574463);c=h(c,d,a,b,x[i+11],16,1839030562);b=h(b,c,d,a,x[i+14],23,-35309556);a=h(a,b,c,d,x[i+1],4,-1530992060);d=h(d,a,b,c,x[i+4],11,1272893353);c=h(c,d,a,b,x[i+7],16,-155497632);b=h(b,c,d,a,x[i+10],23,-1094730640);a=h(a,b,c,d,x[i+13],4,681279174);d=h(d,a,b,c,x[i+0],11,-358537222);c=h(c,d,a,b,x[i+3],16,-722521979);b=h(b,c,d,a,x[i+6],23,76029189);a=h(a,b,c,d,x[i+9],4,-640364487);d=h(d,a,b,c,x[i+12],11,-421815835);c=h(c,d,a,b,x[i+15],16,530742520);b=h(b,c,d,a,x[i+2],23,-995338651);a=j(a,b,c,d,x[i+0],6,-198630844);d=j(d,a,b,c,x[i+7],10,1126891415);c=j(c,d,a,b,x[i+14],15,-1416354905);b=j(b,c,d,a,x[i+5],21,-57434055);a=j(a,b,c,d,x[i+12],6,1700485571);d=j(d,a,b,c,x[i+3],10,-1894986606);c=j(c,d,a,b,x[i+10],15,-1051523);b=j(b,c,d,a,x[i+1],21,-2054922799);a=j(a,b,c,d,x[i+8],6,1873313359);d=j(d,a,b,c,x[i+15],10,-30611744);c=j(c,d,a,b,x[i+6],15,-1560198380);b=j(b,c,d,a,x[i+13],21,1309151649);a=j(a,b,c,d,x[i+4],6,-145523070);d=j(d,a,b,c,x[i+11],10,-1120210379);c=j(c,d,a,b,x[i+2],15,718787259);b=j(b,c,d,a,x[i+9],21,-343485551);a=f(a,o);b=f(b,p);c=f(c,q);d=f(d,r)}return Array(a,b,c,d)}