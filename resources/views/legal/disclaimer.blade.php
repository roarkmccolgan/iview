@extends('_layouts.privacy')

@section('pagetitle', 'Disclaimer')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<h1>IDC Disclaimer</h1>
<p>
THIS INFORMATION IS PROVIDED TO YOU AS A TOOL AND RESULTS REPORT "AS IS" WITH THE UNDERSTANDING THAT THERE ARE NO REPRESENTATIONS OR WARRANTIES OF ANY KIND EITHER EXPRESS OR IMPLIED. IDC DISCLAIMS ALL WARRANTIES INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. IDC DOES NOT WARRANT OR MAKE ANY REPRESENTATIONS REGARDING THE USE, VALIDITY, ACCURACY OR RELIABILITY OF THE TOOL OR THE RESULTS OF THE USE OF THE TOOL. IN NO EVENT SHALL IDC BE LIABLE FOR ANY DAMAGES, INCLUDING THOSE ARISING AS A RESULT OF IDC'S NEGLIGENCE, WHETHER THOSE DAMAGES ARE DIRECT, CONSEQUENTIAL, INCIDENTAL, OR SPECIAL, FLOWING FROM YOUR USE OF OR INABILITY TO USE THE TOOL OR INFORMATION PROVIDED HEREWITH OR RESULTS OF THE TOOL'S USE EVEN IF IDC HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THE ULTIMATE RESPONSIBILITY FOR ACHIEVING THE CALCULATED RESULTS REMAINS WITH YOU. THIS TOOL IS NOT INTENDED TO PROVIDE PRICING FOR ANY SOLUTION. THIS TOOL IS NOT FOR USE BY OR FOR INDIVIDUAL/CONSUMER PURPOSES.
</p>
<p>
	{{ $extra }}
</p>
<p>
	This evaluation is designed to be a step in the transformation journey, not the definitive answer. The quality and usefulness of the guidance from this Service is, of course, linked to the completeness and accuracy of your inputs. 
</p>
<p>
	The digital transformation capability assessment tool is provided on an "as is" and "as available" basis. IDC endeavors to provide information that is accurate. However, IDC expressly disclaims any and all warranties, including but not limited to any warranties as to the accuracy and completeness of any information provided. 
</p>
<p>
	IDC will be accumulating statistics as you and other individuals operate the service to further inform our research process. If you have any questions about this, we recommend you review IDC's Terms of Use before continuing.
</p>
@stop
