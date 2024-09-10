using Microsoft.AspNetCore.Mvc;

namespace SoftexWebsite.Controllers
{
    public class CompanyController : Controller
    {
        [Route("/about")]
        [Route("/ar-EG/about")]
        public IActionResult about()
        {
            return View();
        }

        [Route("/word-from-ceo")]
        [Route("/ar-EG/word-from-ceo")]
        public IActionResult CeoWord()
        {
            return View();
        }  
      [Route("/ourclients")]
        [Route("/ar-EG/ourclients")]
        public IActionResult ourclients()
        {
            return View();
        }  
        [Route("/testimonials")]
        [Route("/ar-EG/testimonials")]
        public IActionResult testimonials()
        {
            return View();
        } 
        [Route("/gallery")]
        [Route("/ar-EG/gallery")]
        public IActionResult gallery()
        {
            return View();
        }    
        [Route("/careers")]
        [Route("/ar-EG/careers")]
        public IActionResult careers()
        {
            return View();
        } 
        [Route("/allnews")]
        [Route("/ar-EG/allnews")]
        public IActionResult allnews()
        {
            return View();
        }
    }
}
