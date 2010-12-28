<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.dotask.co>.
 */
namespace Tinyrest\Controller\Rest;
use Tinyrest\Controller\AbstractController;

/**
 * 
 */
class RestController extends AbstractController implements RestControllerInterface{

    public function deleteAction() {
        throw new RestControllerException('Need to implement deleteAction() method');
    }

    public function putAction() {
        throw new RestControllerException('Need to implement putAction() method');
    }

    public function postAction() {
        throw new RestControllerException('Need to implement postAction() method');
    }

    public function getAction() {
        throw new RestControllerException('Need to implement getAction() method');
    }

    public function indexAction() {
        throw new RestControllerException('Need to implement indexAction() method');
    }
}
