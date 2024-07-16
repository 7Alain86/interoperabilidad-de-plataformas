using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using ClienteWebApi.Models;
using System.Threading.Tasks;
using Newtonsoft.Json;
using System.Net.Http;
using System.Net.Http.Headers;

namespace ClienteWebApi.Controllers
{
    public class PeopleController : Controller
    {
        // GET: People
        String Baseurl = "https://localhost:44359/";
        public async Task<ActionResult> Index()
        {
            List<People> PeopleInfo = new List<People>();
            using (var client = new HttpClient())
            {
                client.BaseAddress = new Uri(Baseurl);
                client.DefaultRequestHeaders.Clear();
                client.DefaultRequestHeaders.Accept.Add(new
               MediaTypeWithQualityHeaderValue("application/json"));
                HttpResponseMessage Res = await client.GetAsync("api/people/");
                if (Res.IsSuccessStatusCode)
                {
                    var PeopleResponse = Res.Content.ReadAsStringAsync().Result;
                    PeopleInfo =
                    JsonConvert.DeserializeObject<List<People>>(PeopleResponse);
                }
            }
            return View(PeopleInfo);
        }

        public ActionResult create()
        {
            return View();
        }

        [HttpPost]
        public ActionResult create(People people)
        {
            using (var client = new HttpClient())
            {
                client.BaseAddress = new Uri("https://localhost:44359/api/people");
                var postTask = client.PostAsJsonAsync<People>("people", people);
                postTask.Wait();
                var result = postTask.Result;
                if (result.IsSuccessStatusCode)
                {
                    return RedirectToAction("Index");
                }
            }
            ModelState.AddModelError(string.Empty, "Error contacta al adminsitrador");
            return View(people);
        }

        public ActionResult Edit(int id)
        {
            People people = null;
            using (var client = new HttpClient())
            {
                client.BaseAddress = new Uri("https://localhost:44359");
                var responseTask = client.GetAsync("api/people/" + id.ToString());
                responseTask.Wait();
                var result = responseTask.Result;
                if (result.IsSuccessStatusCode)
                {
                    var readTask = result.Content.ReadAsAsync<People>();
                    readTask.Wait();
                    people = readTask.Result;
                }
            }
            return View(people);
        }

        [HttpPost]
        public ActionResult Edit(People people)
        {
            using (var client = new HttpClient())
            {
                client.BaseAddress = new Uri("https://localhost:44359");
                var putTask = client.PutAsJsonAsync($"api/people/{people.id}", people);
                putTask.Wait();
                var result = putTask.Result;
                if (result.IsSuccessStatusCode)
                {
                    return RedirectToAction("Index");
                }
            }
            return View(people);
        }

        public ActionResult Delete(int id)
        {
            People people = null;
            using (var client = new HttpClient())
            {
                client.BaseAddress = new Uri("https://localhost:44359");
                var responseTask = client.GetAsync("api/people/" + id.ToString());
                responseTask.Wait();
                var result = responseTask.Result;
                if (result.IsSuccessStatusCode)
                {
                    var readTask = result.Content.ReadAsAsync<People>();
                    readTask.Wait();
                    people = readTask.Result;
                }
            }
            return View(people);
        }

        [HttpPost]
        public ActionResult Delete(People people, int id)
        {
            using (var client = new HttpClient())
            {
                client.BaseAddress = new Uri("https://localhost:44359");
                var deleteTask = client.DeleteAsync($"api/people/" + id.ToString());
                deleteTask.Wait();
                var result = deleteTask.Result;
                if (result.IsSuccessStatusCode)
                {
                    return RedirectToAction("Index");
                }
            }
            return View(people);
        }
    }


}