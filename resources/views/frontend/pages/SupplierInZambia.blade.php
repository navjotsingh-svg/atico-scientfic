@extends('frontend.layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700;800&family=Sora:wght@400;600&display=swap" rel="stylesheet">
<style>
:root{--blue:#1947D1;--blue-2:#1238a8;--dark:#0b1c4d;--orange:#FA421A;--green:#25d366;--text:#14182b;--muted:#5a6072;--line:#e6e9f2;--light:#f4f6fc;--white:#fff;--head:'DM Sans',system-ui,sans-serif;--body:'Sora',system-ui,sans-serif;--maxw:1180px;}
*{box-sizing:border-box}html{scroll-behavior:smooth}
body{margin:0;font-family:var(--body);color:var(--text);background:#fff;line-height:1.6;font-size:16px}
h1,h2,h3,h4{font-family:var(--head);line-height:1.2;margin:0 0 .5em}
.wrap{max-width:var(--maxw);margin:0 auto;padding:0 20px}
.btn{display:inline-flex;align-items:center;gap:8px;font-family:var(--head);font-weight:700;border:0;border-radius:8px;padding:14px 24px;cursor:pointer;text-decoration:none;font-size:15px;transition:.2s}
.btn-primary{background:var(--orange);color:#fff}.btn-outline{background:transparent;border:1.5px solid rgba(255,255,255,.55);color:#fff}
.eyebrow{font-family:var(--head);font-weight:700;letter-spacing:1.5px;text-transform:uppercase;font-size:12px;color:var(--orange)}
section{padding:58px 0}.sec-head{max-width:780px;margin-bottom:32px}.sec-head h2{font-size:29px;font-weight:800;color:var(--blue)}.sec-head p{color:var(--muted);margin:.4em 0 0}
.topbar{background:var(--blue);color:#dbe4ff;font-size:13px;padding:8px 0}.topbar .wrap{display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap}
.nav{background:#fff;border-bottom:1px solid var(--line);position:sticky;top:0;z-index:20}.nav .wrap{display:flex;align-items:center;justify-content:space-between;padding:14px 20px}
.logo{font-family:var(--head);font-weight:800;font-size:24px;color:var(--blue);text-decoration:none}.logo span{color:var(--orange)}
.nav-links{display:flex;gap:24px;align-items:center;font-family:var(--head);font-weight:500;font-size:15px}.nav-links a{text-decoration:none;color:var(--text)}
.menu-btn{display:none;font-size:26px;background:0;border:0;color:var(--blue)}
.crumb{background:var(--light);font-size:13px;color:var(--muted);padding:10px 0}.crumb a{color:var(--muted);text-decoration:none}
.hero{
  position:relative;
  color:#fff;
  overflow:hidden;
  background:#1947D1; 
  background: url('{{ asset("assets/frontend/images/BfIDCuMESISpiseKpy3vUMhlNsqzqqCKKP8AY70j.webp") }}');
  background-size:cover;
  background-position:center right
}
.hero::before{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(11,28,77,.86) 0%,rgba(25,71,209,.5) 52%,rgba(25,71,209,.12) 100%)}
.hero .wrap{position:relative;z-index:1;padding:78px 20px 88px}.hero-content{max-width:620px}
.hero h1{font-size:42px;font-weight:800}.hero h1 b{color:var(--orange)}
.hero p.lead{font-size:17px;color:#eaf0ff;margin:16px 0 24px;max-width:560px}
.hero-cta{display:flex;gap:14px;flex-wrap:wrap}.hero-badges{display:flex;gap:26px;margin-top:28px;flex-wrap:wrap;font-size:13px;color:#c7d2f5}.hero-badges b{color:#fff;font-family:var(--head)}
.quick{margin-top:-46px;position:relative;z-index:6;padding:0 0 6px}.quick .grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
.qbox{background:#fff;border:1px solid var(--line);border-radius:14px;padding:20px;display:flex;gap:14px;align-items:center;text-decoration:none;color:inherit;box-shadow:0 14px 34px rgba(11,28,77,.12)}
.qbox .qic{width:48px;height:48px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;flex-shrink:0}
.qbox h4{font-size:16px;color:var(--blue);margin:0 0 2px;font-weight:700}.qbox p{margin:0;font-size:13px;color:var(--muted)}
.grid3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.card{border:1px solid var(--line);border-radius:14px;padding:24px;background:#fff;text-decoration:none;color:inherit;display:block}
.card .ic{width:46px;height:46px;border-radius:10px;background:rgba(25,71,209,.1);color:var(--blue);display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:14px}
.card h3{font-size:17px;color:var(--blue);font-weight:700}.card p{font-size:14px;color:var(--muted);margin:4px 0 0}.card .arrow{color:var(--orange);font-weight:700;font-size:14px;margin-top:10px;display:inline-block}
.aud{background:var(--light)}
.split{display:grid;grid-template-columns:1.15fr .85fr;gap:36px;align-items:center}.split p{color:var(--muted)}.split h2{color:var(--blue);font-size:28px;font-weight:800}
.hl{background:linear-gradient(135deg,var(--blue),var(--blue-2));color:#fff;border-radius:16px;padding:30px}.hl .big{font-family:var(--head);font-weight:800;font-size:26px;color:#fff;line-height:1.1;margin-bottom:8px}.hl p{color:#d7e0ff;margin:0;font-size:15px}
.buy{background:#fff;border:1px solid var(--line);border-radius:12px;padding:20px}.buy .ic{font-size:24px}.buy h4{color:var(--blue);font-size:15px;margin:8px 0 4px}.buy p{color:var(--muted);font-size:13px;margin:0}
.tbl-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:14px}
table.kebs{width:100%;border-collapse:collapse;min-width:640px}
table.kebs th,table.kebs td{text-align:left;padding:14px 18px;border-bottom:1px solid var(--line);font-size:14px;vertical-align:top}
table.kebs thead th{background:var(--blue);color:#fff;font-family:var(--head);font-weight:700;font-size:13px}
table.kebs td:first-child{font-weight:700;color:var(--blue);font-family:var(--head)}
table.kebs tbody tr:nth-child(even){background:var(--light)}
.band{background:var(--dark);color:#fff}.band .wrap{display:grid;grid-template-columns:1.3fr .7fr;gap:30px;align-items:center}.band h2{color:#fff;font-size:27px;font-weight:800}.band p{color:#cdd6ee}
.band .box{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:14px;padding:26px;text-align:center}
.why{display:grid;grid-template-columns:1fr 1fr;gap:14px 36px;padding:0;margin:0}.why li{list-style:none;padding-left:34px;position:relative;margin-bottom:6px}
.why li::before{content:"\2713";position:absolute;left:0;top:0;width:22px;height:22px;background:rgba(37,211,102,.15);color:#1f9d57;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px}
.form-sec{background:var(--light)}.form-wrap{background:#fff;border:1px solid var(--line);border-radius:16px;padding:32px}.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.field{display:flex;flex-direction:column;gap:6px}.field.full{grid-column:1/-1}.field label{font-size:13px;font-weight:600;color:var(--blue);font-family:var(--head)}
.field input,.field textarea,.field select{padding:12px 14px;border:1px solid var(--line);border-radius:8px;font-family:var(--body);font-size:15px}
.faq details{border:1px solid var(--line);border-radius:12px;margin-bottom:12px;overflow:hidden}
.faq summary{list-style:none;cursor:pointer;padding:18px 22px;font-family:var(--head);font-weight:700;color:var(--blue);display:flex;justify-content:space-between;align-items:center}
.faq summary::-webkit-details-marker{display:none}.faq summary::after{content:"+";color:var(--orange);font-size:22px}.faq details[open] summary::after{content:"\2013"}.faq .ans{padding:0 22px 20px;color:var(--muted);font-size:15px}
.pill{display:inline-block;background:var(--light);border:1px solid var(--line);border-radius:30px;padding:8px 18px;margin:4px;font-size:14px;text-decoration:none;color:var(--blue);font-family:var(--head);font-weight:500}
footer{background:var(--dark);color:#aeb9da;padding:40px 0;font-size:14px}footer .wrap{display:flex;justify-content:space-between;gap:20px;flex-wrap:wrap}
@media(max-width:860px){section{padding:40px 0}.nav-links{display:none}.menu-btn{display:block}.hero h1{font-size:29px}.hero::before{background:linear-gradient(rgba(11,28,77,.9),rgba(11,28,77,.74))}.quick{margin-top:-20px}.quick .grid{grid-template-columns:1fr 1fr}.grid3{grid-template-columns:1fr 1fr}.split{grid-template-columns:1fr}.band .wrap{grid-template-columns:1fr}.why{grid-template-columns:1fr}.form-grid{grid-template-columns:1fr}.sec-head h2,.split h2{font-size:23px}}
@media(max-width:480px){.quick .grid,.grid3{grid-template-columns:1fr}.hero h1{font-size:25px}}
</style>
</head>
<body>
<div class="crumb"><div class="wrap"><a href="#">Home</a> › Laboratory Equipment Supplier in Zambia</div></div>
<header class="hero"><div class="wrap"><div class="hero-content">
  <span class="eyebrow">Lab Equipment Supplier for Zambia · ECZ · ZABS</span>
  <h1>Laboratory Equipment Supplier & Exporter in <b>Zambia</b></h1>
  <p class="lead">Physics, chemistry, biology &amp; technical lab equipment for secondary schools, TEVETA colleges, universities and CDF projects across Zambia — manufactured in Ambala, shipped via Dar es Salaam or Durban. ZABS-ready, factory prices, no middleman.</p>
  <div class="hero-cta"><a class="btn btn-primary" href="#enquiry">Get a Free Quote →</a><a class="btn btn-outline" href="#tenders">Send your BOQ / Tender →</a></div>
  <div class="hero-badges"><span><b>70+ yrs</b><br>Since 1954</span><span><b>ISO 9001</b><br>Certified</span><span><b>ZABS</b><br>ready</span><span><b>Dar / Durban</b><br>~5–7 wks</span></div>
</div></div></header>
<div class="quick"><div class="wrap"><div class="grid">
    <a class="qbox" href="#tenders"><span class="qic" style="background:var(--blue)">📋</span><span><h4>OEM & Tenders</h4><p>Quote for bulk & tender supply</p></span></a>
    <a class="qbox" href="tel:+919996186555"><span class="qic" style="background:var(--blue)">📞</span><span><h4>Support Team</h4><p>+91 99961 86555</p></span></a>
    <a class="qbox" href="mailto:sales@aticoscientific.com"><span class="qic" style="background:var(--orange)">✉️</span><span><h4>Email to Sales</h4><p>sales@aticoscientific.com</p></span></a>
    <a class="qbox" href="#enquiry"><span class="qic" style="background:var(--orange)">📲</span><span><h4>Request a Callback</h4><p>Leave your number, we'll call you</p></span></a>
  </div></div></div>
<section style="padding-bottom:30px"><div class="wrap" style="max-width:860px"><p style="font-size:18px;color:var(--text)">Atico Scientific is a direct laboratory equipment manufacturer, supplier and exporter to Zambia. We've built science and technical lab equipment in Ambala, India for over 70 years, and today a steady share ships to Zambian secondary schools, TEVETA colleges, universities and Constituency Development Fund projects — via Dar es Salaam or Durban, at factory prices with no middleman.</p></div></section>
<section class="aud"><div class="wrap"><div class="split">
  <div><span class="eyebrow">Why it matters</span><h2>Zambia's two-tier curriculum keeps science practical</h2><p>Zambia's curriculum, written by the Curriculum Development Centre (CDC), runs academic and skills pathways, and the Examinations Council of Zambia (ECZ) assesses science at Grade 9 and Grade 12 — including practical and school-based assessment.</p><p>Both pathways need working labs and workshops, so demand isn't limited to academic schools; skills centres need equipment too. We help Zambian schools and colleges equip to the curriculum.</p></div>
  <div class="hl"><div class="big">CDF-funded demand</div><p>The Constituency Development Fund now pays for school equipment across constituencies — a widespread, recurring source of lab-equipment demand nationwide.</p></div>
</div></div></section>
<section><div class="wrap"><div class="sec-head"><span class="eyebrow">Lab equipment ranges we export to Zambia</span><h2>Complete lab solutions for Zambia institutions</h2></div><div class="grid3"><a class="card" href="#"><div class="ic">⚛️</div><h3>Physics Lab Equipment</h3><p>Mechanics, optics, electricity, modern physics.</p><span class="arrow">View range →</span></a><a class="card" href="#"><div class="ic">🧪</div><h3>Chemistry Lab Equipment</h3><p>Apparatus, glassware &amp; chemistry sets.</p><span class="arrow">View range →</span></a><a class="card" href="#"><div class="ic">🔬</div><h3>Biology Lab Equipment</h3><p>Models, instruments &amp; microscopes.</p><span class="arrow">View range →</span></a><a class="card" href="#"><div class="ic">🎓</div><h3>Educational & School Science</h3><p>Full curriculum-based school science packages.</p><span class="arrow">View range →</span></a><a class="card" href="#"><div class="ic">🛠️</div><h3>TVET & Technical Training</h3><p>Workshops: welding, plumbing, electrical.</p><span class="arrow">View range →</span></a><a class="card" href="#"><div class="ic">⚙️</div><h3>Engineering & Workshop</h3><p>Engineering college lab &amp; workshop kit.</p><span class="arrow">View range →</span></a></div></div></section>
<section class="aud"><div class="wrap"><div class="sec-head"><span class="eyebrow">Who buys in Zambia</span><h2>We supply every level of Zambia procurement</h2></div><div class="grid3"><div class="buy"><div class="ic">🏛️</div><h4>Ministry of Education</h4><p>national school programmes &amp; tenders.</p></div><div class="buy"><div class="ic">🗺️</div><h4>Constituency Development Fund (CDF)</h4><p>equipment for schools in every constituency.</p></div><div class="buy"><div class="ic">🛠️</div><h4>TEVETA &amp; the Ministry of Technology &amp; Science</h4><p>skills centres &amp; trades training.</p></div><div class="buy"><div class="ic">🎓</div><h4>Universities &amp; colleges</h4><p>higher-level and research labs.</p></div><div class="buy"><div class="ic">🏫</div><h4>Private &amp; international schools</h4><p>ECZ, IGCSE &amp; IB labs.</p></div><div class="buy"><div class="ic">🤝</div><h4>Contractors &amp; registered bidders (ZPPA)</h4><p>we supply the equipment behind your bid.</p></div></div></div></section>
<section><div class="wrap"><div class="sec-head"><span class="eyebrow">Import & compliance</span><h2>Importing into Zambia — the ZABS checklist (landlocked)</h2><p>Getting equipment to Zambia cleanly matters as much as the equipment itself. Here's what we handle or prepare for.</p></div>
<div class="tbl-wrap"><table class="kebs"><thead><tr><th>Item</th><th>What is required</th><th>How Atico helps</th></tr></thead><tbody><tr><td>Conformity</td><td>ZABS Certificate of Conformity before loading (waiver if certified by a competent lab in origin country)</td><td>We arrange the CoC / testing</td></tr><tr><td>Route</td><td>Sea to Dar es Salaam (Copperbelt) or Durban (Lusaka &amp; south), then road</td><td>Export crating + full transit documents</td></tr><tr><td>Electrical</td><td>230 V, 50 Hz, Type C, D &amp; G plugs</td><td>All powered equipment specced for Zambia</td></tr><tr><td>Documents</td><td>CoC, invoice, packing list, bill of lading; ZRA via ASYCUDA</td><td>Prepared &amp; shared with your clearing agent</td></tr><tr><td>Lead time</td><td>~5–7 weeks (sea + long inland leg)</td><td>We give a firm delivered date with the quote</td></tr><tr><td>Onward</td><td>Lusaka, Ndola, Kitwe &amp; the Copperbelt</td><td>We quote delivery to your town, not just the port</td></tr></tbody></table></div></div></section>
<section class="band" id="tenders"><div class="wrap"><div>
  <span class="eyebrow">Tenders & funded projects</span><h2>We supply Zambia government & donor-funded tenders</h2><p>A large part of Zambia's lab equipment moves through Ministry programmes, Constituency Development Fund procurement and TEVETA skills projects, all under Zambia Public Procurement Authority (ZPPA) rules. As a direct manufacturer we map specs to your BOQ, give OEM factory pricing, and handle conformity and transit documentation.</p>
  <a class="btn btn-primary" href="#enquiry" style="margin-top:14px">Send your BOQ → Get Tender Pricing</a></div>
  <div class="box"><div style="font-size:40px">📋</div><h3 style="color:#fff;margin:10px 0 4px">Bid-ready packs</h3><p style="margin:0;color:#cdd6ee">Specs mapped to BOQ · pricing · compliance · freight</p></div></div></section>
<section><div class="wrap"><div class="sec-head"><span class="eyebrow">Why Zambia institutions choose Atico</span><h2>A direct manufacturer, not a reseller</h2></div>
<ul class="why"><li>Direct manufacturer — factory prices, no middleman</li><li>ISO 9001, built to ASTM / IS / BIS standards</li><li>Over 70 years of export experience, since 1954</li><li>Equipment matched to Zambia's curriculum & TVET needs</li><li>ZABS & full export documentation handled</li><li>Whole-lab packages, OEM & custom builds + spares</li></ul></div></section>
<section class="form-sec" id="enquiry"><div class="wrap"><div class="split" style="align-items:center">
  <div><span class="eyebrow">Get a free quote</span><h2 style="color:var(--blue);font-size:30px;font-weight:800">Send your requirement or BOQ</h2><p style="color:var(--muted)">Share your equipment list or tender document and we'll return a compliant, factory-priced quotation to Zambia — usually within 24–48 hours.</p></div>
  <div class="form-wrap"><div class="form-grid">
    <div class="field"><label>Name</label><input placeholder="Your name"></div><div class="field"><label>Email</label><input type="email" placeholder="you@email.com"></div>
    <div class="field"><label>Phone / WhatsApp</label><input placeholder="+.."></div><div class="field"><label>Buyer type</label><select><option>School</option><option>TVET Institute</option><option>University / College</option><option>Ministry / Tender</option><option>Distributor / Bidder</option><option>Other</option></select></div>
    <div class="field full"><label>Your requirement / BOQ</label><textarea rows="3" placeholder="e.g. Physics + chemistry lab for a secondary school"></textarea></div>
    <div class="field full"><button class="btn btn-primary" style="width:100%;justify-content:center">Request My Free Quote →</button></div>
  </div></div></div></div></section>
<section class="faq"><div class="wrap" style="max-width:860px"><div class="sec-head"><span class="eyebrow">FAQ</span><h2>Zambia laboratory supply questions</h2></div><details open><summary>Do you export lab equipment to Zambia?</summary><div class="ans">Yes — we supply Zambia regularly, routing by sea to Dar es Salaam or Durban and on by road.</div></details><details><summary>Are you a manufacturer or a local reseller?</summary><div class="ans">We're the manufacturer, based in Ambala, India. You buy direct at factory prices and we export straight to you.</div></details><details><summary>Is your equipment ZABS compliant?</summary><div class="ans">Yes — we arrange the Certificate of Conformity (or origin-country testing where accepted) so your consignment clears.</div></details><details><summary>Can you supply Ministry, CDF and TEVETA tenders?</summary><div class="ans">Yes. We prepare compliant bids with specifications, pricing and documentation.</div></details><details><summary>Which route do you use for a landlocked country?</summary><div class="ans">Dar es Salaam usually suits the Copperbelt; Durban usually suits Lusaka and the south — we pick the best one for you.</div></details><details><summary>How long does delivery to Zambia take?</summary><div class="ans">Roughly 5–7 weeks including the inland leg — a firm date comes with your quote.</div></details></div></section>
<section style="padding-top:0"><div class="wrap"><h3 style="color:var(--blue);font-size:18px">We also export to:</h3><a class="pill" href="#">Kenya</a><a class="pill" href="#">Nigeria</a><a class="pill" href="#">Tanzania</a><a class="pill" href="#">Uganda</a><a class="pill" href="#">Ghana</a></div></section>

@endsection