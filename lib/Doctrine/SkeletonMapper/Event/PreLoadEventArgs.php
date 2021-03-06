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
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\SkeletonMapper\Event;

use Doctrine\SkeletonMapper\ObjectManagerInterface;

/**
 * Class that holds event arguments for a preLoad event.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class PreLoadEventArgs extends LifecycleEventArgs
{
    /**
     * @var array
     */
    private $data;

    /**
     * Constructor.
     *
     * @param object                 $object
     * @param ObjectManagerInterface $objectManager
     * @param array                  $data          Array of data to be loaded and hydrated
     */
    public function __construct($object, ObjectManagerInterface $objectManager, array &$data)
    {
        parent::__construct($object, $objectManager);
        $this->data = & $data;
    }

    /**
     * Get the array of data to be loaded and hydrated.
     *
     * @return array
     */
    public function &getData()
    {
        return $this->data;
    }
}
