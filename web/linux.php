<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1348.17">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 19.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p5 {margin: 0.0px 0.0px 12.0px 0.0px; font: 12.0px Courier; color: #000000; -webkit-text-stroke: #000000}
    p.p6 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #2351d5; -webkit-text-stroke: #2351d5}
    p.p7 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Helvetica; color: #000000; -webkit-text-stroke: #000000; min-height: 13.0px}
    p.p8 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #000000; -webkit-text-stroke: #000000; min-height: 13.0px}
    p.p9 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #0433ff}
    p.p10 {margin: 0.0px 0.0px 0.0px 0.0px; font: 10.0px Monaco; min-height: 14.0px}
    p.p11 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial}
    p.p12 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; -webkit-text-stroke: #000000}
    p.p13 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; min-height: 12.0px}
    p.p14 {margin: 0.0px 0.0px 0.0px 0.0px; font: 10.0px Courier; color: #0433ff}
    p.p15 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; color: #000000}
    p.p16 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Helvetica; color: #000000; -webkit-text-stroke: #000000}
    p.p17 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #0433ff; -webkit-text-stroke: #2351d5}
    p.p18 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Monaco; color: #0433ff; -webkit-text-stroke: #2351d5}
    p.p19 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.0px Helvetica; color: #0433ff; -webkit-text-stroke: #000000}
    p.p20 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px 'Courier New'; color: #2351d5; -webkit-text-stroke: #2351d5}
    span.s1 {font-kerning: none}
    span.s2 {font: 12.0px Arial; text-decoration: underline ; font-kerning: none; color: #0000ee; -webkit-text-stroke: 0px #0000ee}
    span.s3 {font-kerning: none; color: #0000ff; -webkit-text-stroke: 0px #0000ff}
    span.s4 {font: 12.0px Times; font-kerning: none}
    span.s5 {font: 12.0px Arial; font-kerning: none}
    span.s6 {font: 11.0px Courier; font-kerning: none; color: #0f2b7a; -webkit-text-stroke: 0px #0f2b7a}
    span.s7 {font: 11.0px Helvetica; font-kerning: none}
    span.s8 {font: 11.0px Helvetica; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000}
    span.s9 {font-variant-ligatures: no-common-ligatures}
    span.s10 {font: 11.0px Courier; font-kerning: none; color: #2351d5; -webkit-text-stroke: 0px #2351d5}
    span.s11 {font: 11.0px Courier; font-kerning: none; -webkit-text-stroke: 0px #2351d5}
    span.s12 {font: 11.0px 'Courier New'; font-kerning: none; color: #2351d5; -webkit-text-stroke: 0px #2351d5}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<?php
//  comment in phpp ..
include 'phpfiles.php';
?>

<p class="p1"><span class="s1">How to compile FreeFem++ under Linux.<span class="Apple-converted-space"> </span></span></p>
<p class="p2"><span class="s1"><i>in tested FH (08/03/2016) on Ubuntu 14.04.4 LTS (form scatch) .</i></span></p>
<p class="p3"><span class="s1"><br>
</span></p>
<p class="p5"><span class="s1"> Before the build process check the installed software <A HREF="linux.php#before">   (here) </A>  </p> 
<p class="p5"><span class="s1">First download the tar.gz file contening source from  
    <? ppfile($sfile,"Source code") ?> </p>
 <p class="p5"><span class="s1"> or you can get the latest source from
an anonymous <A href="http://mercurial.selenic.com/" > Mercurial SCM </A> copy with the following unix shell commands&nbsp;:
</span></p>
<p class="p5"><span class="s3"><b>hg clone http://www.freefem.org/ff++/ff++<br>
</b></span><span class="s4"><br>
i</span><span class="s5">f your version of automake &gt;= 1.13 , autoconf &gt;= 2.69 do <br>
</span><span class="s3"><b>autoreconf -i </b></span><span class="s1"><br>
</span><span class="s5">else this is too old, then do <br>
</span><span class="s3"><b>tar zxvf AutoGeneratedFile.tar.gz<span class="Apple-converted-space"> </span></b></span></p>
<p class="p3"><span class="s1">To have correct configure script and Makefie<br>
</span></p>
<p class="p3"><span class="s1"><span class="Apple-converted-space"> </span>To compile with no additionnal sofware</span></p>
<p class="p3"><span class="s1"><br>
</span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space"> </span>./configure<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</b></span></p>
<p class="p7"><span class="s6"><b><span class="Apple-converted-space"> </span></b></span><span class="s1"> <span class="Apple-converted-space"> </span></span></p>
<p class="p3"><span class="s7"><span class="Apple-converted-space"> </span></span><span class="s1">To compile with lot of additionnal software.</span></p>
<p class="p6"><span class="s8"><br>
</span><span class="s1"><b>./configure --enable-download<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</b></span></p>
<p class="p8"><span class="s1"><b></b></span><br></p>
<p class="p7"><span class="s1"></span><br></p>
 <A NAME="before">   
<p class="p3"><span class="s1">Before you have to install some usefull package with apt-get under Debian / Ubuntu.<span class="Apple-converted-space"> </span></span></p>
<p class="p3"><span class="s1"><span class="Apple-converted-space"> </span>you can install this package <span class="Apple-converted-space">  </span>software</span></p>
<p> </p>
<p class="p9"><span class="s9"><b>sudo apt-get install cpp  freeglut3-dev g++ gcc  gfortran</b></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>ghostscript  m4 make  patch pkg-config wget python</b></span></p>
<p class="p3"><span class="s9"> # other lib of a full freefem++ can be change </span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>libopenblas-dev liblapack-dev libhdf5-dev libgsl0-dev</b></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>  libscotch-dev  libfftw3-dev  libsuperlu3-dev libarpack2-dev libsuitesparse-dev libmumps-dev  libmumps-seq-dev  libnlopt-dev  coinor-libipopt-dev  libgmm++-dev</b></span></p>
<p class="p3"><span class="s9"> # not mandatory package  but usefull for developpenemt </span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install autoconf automake autotools-dev  bison  flex gdb </b></span></p>
<p class="p3"><span class="s9"> # not mandatory package for downlaod with hg / mercurail tool</span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install mercurial </b></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install gnuplot-qt </b></span></p>

<p class="p10"><span class="s9"></span><br></p>
<p class="p11"><span class="s9"># install de mpich for parallel version <span class="Apple-converted-space"> </span></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>mpich</b></span></p>
<p class="p10"><span class="s9"></span><br></p>
<p class="p12"><span class="s1">To configure <span class="Apple-converted-space">  </span>with petsc and hpddm (need<span class="Apple-converted-space">  </span>c++ 11 features )</span></p>
<p class="p13"><span class="s9"></span><br></p>
<p class="p11"><span class="s9"># compilation de PETSc<span class="Apple-converted-space"> </span></span></p>
<p class="p14"><span class="s9"><b>get http://ftp.mcs.anl.gov/pub/petsc/release-snapshots/petsc-lite-3.6.3.tar.gz</b></span></p>
<p class="p14"><span class="s9"><b>tar zxvf petsc-lite-3.6.3.tar.gz</b></span></p>
<p class="p14"><span class="s9"><b>cd petsc-lite-3.6.3</b></span></p>
<p class="p11"><span class="s9">#build the python, file ff-conf.py<span class="Apple-converted-space">  </span>python for configuration of PETSc<span class="Apple-converted-space"> </span></span></p>
<p class="p9"><span class="s9"><b>cat &gt;ff-conf.py &lt;&lt;EOF</b></span></p>
<p class="p9"><span class="s9"><b>#!/usr/bin/python</b></span></p>
<p class="p9"><span class="s9"><b>if __name__ == '__main__':</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>import sys</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>import os</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>sys.path.insert(0, os.path.abspath('config'))</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>import configure</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>configure_options = [</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--CFLAGS=-O2',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--COPTFLAGS=-O3',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--CXXFLAGS=-O2 -std=c++11',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--CXXOPTFLAGS=-O3',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--FFLAGS=-O2',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--FOPTFLAGS=-O3',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-fftw',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-hypre',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-metis',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-ml',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-mumps',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-parmetis',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-pastix',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-ptscotch',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-scalapack',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-suitesparse',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--download-superlu',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--prefix=/usr/local/ff++/petsc',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'--with-blas-lapack-lib='-llapack -lblas',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">    </span>'PETSC_ARCH=arch-ff++',</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>]</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>configure.petsc_configure(configure_options)</b></span></p>
<p class="p9"><span class="s9"><b>EOF</b></span></p>
<p class="p9"><span class="s9"><b>chmod a+x ff-conf.py</b></span></p>
<p class="p15"><span class="s9"># launch the petsc configure and follow the instruction<span class="Apple-converted-space"> </span></span></p>
<p class="p14"><span class="s9"><b>./ff-conf.py</b></span></p>
<p class="p3"><span class="s7"><br>
</span><span class="s1">Now you can reconfigure freefem++ with petsc (need<span class="Apple-converted-space">  </span>c++ 11 features )</span></p>
<p class="p3"><span class="s1"><br>
<span class="Apple-converted-space">  </span>Go in freefem++ directory.<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p14"><span class="s10"><b><span class="Apple-converted-space"> </span></b></span><span class="s11"><b>./configure --enable-download </b></span><span class="s9"><b>--with-petsc=/usr/local/ff++/petsc/lib/petsc/conf/petscvariables</b></span></p>
<p class="p17"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p17"><span class="s1"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</b></span></p>
<p class="p17"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</b></span></p>
<p class="p18"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">Try to download and compile (add --enable-download flags to configure)</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>lot of related<span class="Apple-converted-space">  </span>software, (Please read the licence of all with software,</span></p>
<p class="p16"><span class="s1">if you use freefem++ for commercial purpose)<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">tetgen superlu fftw metis yams mshmet MUMPS</span></p>
<p class="p16"><span class="s1">blacs parmetis scalapack scotch superludist MUMPS pastix hypre hips<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">For the link with mmg3d software put the tar.gz archive in .../dowload/pgk directory.</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">Remark, you can also copy all the download file in ../download/pgk if you have not internet connection.</span></p>
<p class="p16"><span class="s1">To download all third party package do.<span class="Apple-converted-space"> </span></span></p>
<p class="p7"><span class="s1"></span><br></p>
<p class="p19"><span class="s1">./download/getall -a <br>
</span></p>
<p class="p7"><span class="s1"><span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1">TO simplify the link and compilation part,<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">I have add 3 files</span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY<span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-download</span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-config</span></p>
<p class="p16"><span class="s1"><br>
<br>
<br>
</span></p>
<p class="p16"><span class="s1">the files<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-config</span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-download</span></p>
<p class="p16"><span class="s1">are respectively created with ./configure commande ,</span></p>
<p class="p16"><span class="s1">the compilation of all download software.</span></p>
<p class="p16"><span class="s1">and the<span class="Apple-converted-space">  </span>examples++-load/Makefile.</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">Some configure flags use to build the current version</span></p>
<p class="p16"><span class="s1">-----------------------------------------------------</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">*<span class="Apple-converted-space">  </span>Under Debian: ( 2008)</span></p>
<p class="p16"><span class="s1">----------------</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>the installed packages + dependance are:<span class="Apple-converted-space">   </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>gcc g++ g77</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>libsuitesparse-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>libarpack2-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>libx11-dev libxt-dev libxext-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>patch</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>wget</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>freeglut3-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- bluid the parallel version</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>openmpi-dev openmpi</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- to rebuild de documentation: <span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>imagemagick<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>tetex-base <span class="Apple-converted-space">  </span>tetex-bin<span class="Apple-converted-space">  </span>tetex-extra<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>./configure<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</span></p>
<p class="p7"><span class="s1"><span class="Apple-converted-space">   </span></span></p>
<p class="p16"><span class="s1">*<span class="Apple-converted-space">  </span>Under Ubuntu (2008)</span></p>
<p class="p16"><span class="s1">---------------</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>the installed packages + dependance are:<span class="Apple-converted-space">   </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>gcc g++<span class="Apple-converted-space">  </span>g77</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>wget<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>m4 bison flex patch</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>libzip-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>libx11-dev libxt-dev libxext-dev<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libxpm4 libxpm4-dbg<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libsuitesparse-dev libarpack2-devlibarpack2 libarpack2-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libfltk1.1 libfltk1.1-dbg libfltk1.1-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libopenmpi1 libopenmpi-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libopenmpi-dbg libxpm-dev<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>freeglut3 freeglut3-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libx11-dev<span class="Apple-converted-space">  </span>libxt-dev<span class="Apple-converted-space">  </span>libxext-dev<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libglut3-dev<span class="Apple-tab-span">	</span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- bluid the parallel version</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>openmpi-dev openmpi</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- to rebuild de documentation: <span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>imagemagick<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>tetex-base <span class="Apple-converted-space">  </span>tetex-bin<span class="Apple-converted-space">  </span>tetex-extra<span class="Apple-converted-space"> </span></span></p>
<p class="p7"><span class="s1"><span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p20"><span class="s1"><b><span class="Apple-converted-space"> </span>./configure --enable-download<span class="Apple-converted-space">  </span>--with-mpi=mpic++</b></span></p>
<p class="p20"><span class="s1"><b>#<span class="Apple-converted-space">  </span>utility of parameter:</b></span></p>
<p class="p20"><span class="s1"><b>#<span class="Apple-converted-space">  </span>--enable-download :<span class="Apple-converted-space">  </span>for fft and tetgen ...<span class="Apple-converted-space"> </span></b></span></p>
<p class="p20"><span class="s1"><b>#<span class="Apple-converted-space">  </span>--with-mpi=mpic++ : for mpi version<span class="Apple-converted-space"> </span></b></span></p>
<p class="p20"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p16"><span class="s12"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span></b></span><span class="s1">(to test de version)</span></p>
<p class="p20"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space"> </span></b> </span><span class="s8">(under root)</span></p>
</body>
</html>
