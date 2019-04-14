@extends('site.layouts.menu')


@section('content')
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">Blog</div>
                    <div class="page-subtitle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-box summary">
                    <div class="post-photo">
                        <img src="images/blog/microsoft.jpg" height="500" width="500" alt="">
                    </div>
                    <div class="post-title">Microsoft’s HoloLens 2 with improved hand tracking system debuts at MWC</div>
                    <div class="post-summary"><p>MWC 2019 in Barcelona saw the official launch of Microsoft’s second-generation AR headset HoloLens 2. The 
                        headset is a much lighter and cheaper version of the original four-year-old original headset and has made its debut with new features 
                        including better visuals, and “the most advanced hand tracking system” according to CNET.</p>

                       <!-- <p>Besides retaining the features of its predecessor, Microsoft Hololens 2 also has an eye tracking feature, enabled by cameras and
                             sensors near the nose ridge pointing at the user’s eyes. Another important feature is an onboard iris recognition that uses 
                             Windows Hello for logging in to HoloLens 2.
                        </p>
                        
                        <p>The second-gen HoloLens doesn’t sport any dedicated controllers instead they can be controlled by hand and voice via Cortana. 
                            The HoloLens is speculated to have additional gesture support, as suggested by the leaked reports on it, which implies the 
                            inclusion of hand motion recognition, enabling up to 21 points of recognition per hand. The HoloLens 2 comes with a much more 
                            improved field of view compared to the older headset.
                        </p>
                        <p>
                        Priced at $3500, the HoloLens 2 is ideal for all kinds of industrial as well as military purposes. New HoloLens apps like Dynamic 365 
                        Guides have also been announced by Microsoft, where companies can put guided instructions in mixed reality. Another app, Dynamic 365
                         Layout allows users to create maps and store them using MS.</p>
                        <p>
                        The AR headset will also work with new cloud apps over Wi-Fi and has a battery life of about 3 hours. Mozilla i also expected to 
                        introduce its Firefox browser to the HoloLens 2.
                        </p>
                        <p>
                        Powered by Qualcomm Snapdragon 850 Compute Platform, the Hololens 2 comes with a second-generation custom-built Holographic Processing 
                        Unit. Unlike the original HoloLens which has 720 display, the new Hololens has 2K display for each eye and comes with 5 channel 
                        microphone array for audio input and “spatial audio”output. As far as connectivity is concerned, the options are USB Type-C, 802.11ac 
                        2×2, and lacks cellular connectivity.</p>
                        
                        <p>Although no release date has been announced by Microsoft, pre-orders are open now.</p>-->
                        
                        </div>
                    <div class="post-link">
                        <a href="post.html" class="hbtn hbtn-blue hbtn-lg">Know more</a>
                    </div>
                </div>
                <div class="post-box summary">
                    <div class="post-photo">
                        <img src="images/blog/incognito.jpeg" height="500px" width="200px" alt="">
                    </div>
                    <div class="post-title">Incognito Mode Won’t Keep Your Browsing Private</div>
                    <div class="post-summary"><p>One of the most common techniques people think can help hide their activity is the use of 
                        an “incognito” mode in a browser. This opens a secure browsing window where third-party cookies are blocked and 
                        browsing history is paused.The problem with incognito modes is they provide a false sense of security.Despite what
                         most people assume, incognito modes are primarily built to block traces of your online activity being left on your 
                         computer — not the web. Just because you are using incognito mode, that doesn’t mean your ISP and sites like Google,
                          Facebook, and Amazon can’t track your activity.</p></div>
                    <div class="post-link">
                        <a href="post.html" class="hbtn hbtn-blue hbtn-lg">Know more</a>
                    </div>
                </div>
                <div class="post-box summary">
                        <div class="post-photo">
                            <img src="images/blog/edge.jpg" height="500px" width="200px" alt="">
                        </div>
                        <div class="post-title">Microsoft's Edge Goes With the Chromium Flow</div>
                        <div class="post-summary"><p>Microsoft on Monday released the first Dev and Canary channel builds of the next
                             version of Microsoft Edge, which is based on the Chromium open source project.The company last year revealed 
                             that it was reworking its Edge browser to be based on Chromium. Now the latest developments are ready for 
                             early testers and adopters on several versions of Windows and macOS. So far, however, no support is available
                              for Linux.</p></div>
                        <div class="post-link">
                            <a href="post.html" class="hbtn hbtn-blue hbtn-lg">Know more</a>
                        </div>
                    </div>
                <nav class="paging">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link prev" href="#" aria-label="Previous">
                                <i class="hstb hstb-down-arrow"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link next" href="#" aria-label="Next">
                                <i class="hstb hstb-down-arrow"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection